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
        //
        return view('form_layout/main');
    }

    public function submit(): ResponseInterface
    {
        // Handle form submission logic here
        // For example, you can save the data to the database or perform any other actions

        // dd($this->request->getPost());
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required|max_length[100]',
            'email' => 'valid_email',
            'no_handphone' => 'max_length[15]',
            'jenis_kelamin' => 'required|in_list[L,P]',
            'pendidikan_tertinggi' => 'required|in_list[<=SLTA/Sederajat, D1/D2/D3, D4/S1, S2, S3]',
            'pekerjaan_utama' => 'required|max_length[50]',
            'kategori_instansi' => 'required',
            'nama_instansi' => 'required|max_length[100]',
            'pemanfaatan_utama' => 'required|max_length[50]',
        ],[
            'nama' => [
                'required' => 'Nama harus diisi.',
                'max_length' => 'Nama tidak boleh lebih dari 100 karakter.'
            ],
            'email' => [
                'valid_email' => 'Email tidak valid.'
            ],
            'no_handphone' => [
                'max_length' => 'Nomor handphone tidak boleh lebih dari 15 karakter.',

            ],
            'jenis_kelamin' => [
                'required' => 'Jenis kelamin harus dipilih.',
                'in_list' => 'Jenis kelamin harus L (Laki-laki) atau P (Perempuan).'
            ],
            'pendidikan_tertinggi' => [
                'required' => 'Pendidikan tinggi harus diisi.',
            ],
            // Add other validation rules as needed
        ]);

        if (!$this->validate($validation->getRules())) {
            return $this->response->setJSON([
                'status' => 'error',
                'errors' => $this->validator->getErrors()
            ]);
        }



        // Simulate a successful submission response
        $data = [
            'status' => 'success',
            'message' => 'Form submitted successfully.',
        ];

        return $this->response->setJSON($data);
    }

}
