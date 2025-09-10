<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AnswersBlock2;
use App\Models\AnswersBlock3;
use App\Models\Responses;
use CodeIgniter\HTTP\ResponseInterface;

class FormController extends BaseController
{
    protected $Responses;
    protected $AnswersBlock2;
    protected $AnswersBlock3;

    public function __construct()
    {
        $this->Responses = new Responses();
        $this->AnswersBlock2 = new AnswersBlock2();
        $this->AnswersBlock3 = new AnswersBlock3();
    }

    public function index()
    {
        return view('form_layout/main');
    }

    public function submit(): ResponseInterface
    {
        $recaptchaResponse = $this->request->getPost('g-recaptcha-response');
        $secret = "6LcfDv8qAAAAAI1C3U2uMW6KhzS2TEcNY4qsVJ4y";

        $client = \Config\Services::curlrequest();
        $verifyResponse = $client->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret' => $secret,
                'response' => $recaptchaResponse
            ]
        ]);

        $captchaSuccess = json_decode($verifyResponse->getBody());

        // untuk v3, cek success + score
        if (!($captchaSuccess->success) || $captchaSuccess->score < 0.5) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => ['captcha' => 'Captcha verification failed. Please try again.'],
                'message' => 'Captcha verification failed. Please try again.'
            ]);
        }

        // dd($this->request->getPost());
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required|max_length[100]',
            'jenis_kelamin' => 'required|in_list[male,female]',
            'pendidikan_tertinggi' => 'required',
            'pengaduan' => 'required|max_length[5]'
        ], [
            'nama' => [
                'required' => 'Nama harus diisi.',
                'max_length' => 'Nama tidak boleh lebih dari 100 karakter.'
            ],
            'jenis_kelamin' => [
                'required' => 'Jenis kelamin harus dipilih.',
                'in_list' => 'Jenis kelamin harus L (Laki-laki) atau P (Perempuan).'
            ],
            'pendidikan_tertinggi' => [
                'required' => 'Pendidikan tinggi harus diisi.',
                'in_list' => 'Pendidikan tinggi harus salah satu dari <=SLTA/Sederajat, D1/D2/D3, D4/S1, S2, S3.'
            ],
            'pengaduan' => [
                'required' => 'Pengaduan harus diisi.',
                'max_length' => 'Pengaduan tidak boleh lebih dari 5 karakter.'
            ]
        ]);

        if (!$this->validate($validation->getRules())) {
            return $this->response->setJSON([
                'status' => 'error',
                'errors' => $this->validator->getErrors()
            ]);
        }

        $blok_1 = [
            'full_name' => $this->request->getPost('nama'),
            'gender' => $this->request->getPost('jenis_kelamin'),
            'highest_education' => $this->request->getPost('pendidikan_tertinggi'),
            'has_complaint_history' => $this->request->getPost('pengaduan')
        ];
        $kepentingan = $this->request->getPost('kepentingan');
        $kepuasan = $this->request->getPost('kepuasan');
        if (!is_array($kepentingan) || !is_array($kepuasan)) {
            return $this->response->setJSON([
                'status' => 'error',
                'errors' => ['blok_2' => 'Data kepentingan/kepuasan tidak valid.']
            ]);
        }
        // dd($blok_1, $kepentingan, $kepuasan);

        try {
            $response_id = $this->Responses->insert($blok_1);
            try {
                $blok_2 = [];
                foreach ($kepentingan as $key => $value) {
                    $blok_2[$key]['response_id'] = $response_id;
                    $blok_2[$key]['question_block_2_id'] = $key + 1;
                    $blok_2[$key]['importance_level'] = $value;
                    $blok_2[$key]['satisfaction_level'] = $kepuasan[$key];
                }
                // dd($blok_2);
                foreach ($blok_2 as $data) {
                    $this->AnswersBlock2->insert($data);
                }
            } catch (\Exception $e) {
                return $this->response->setJSON([
                    'status' => 'error',
                    'errors' => ['blok_2' => $e->getMessage()]
                ]);
            }
            return $this->response->setJSON([
                'status' => 'success',
                'success' => true,
                'message' => 'Data berhasil disimpan.'
            ]);
        } catch (\Exception $e) {
            return $this->response->setJSON([
                'status' => 'error',
                'success' => false,
                'errors' => ['blok_1' => $e->getMessage()]
            ]);
        }
        // dd($this->request->getPost());
    }
}
