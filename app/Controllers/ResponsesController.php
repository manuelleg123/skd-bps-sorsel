<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AnswersBlock2;
use App\Models\AnswersBlock3;
use App\Models\QuestionsBlock2;
use App\Models\Responses;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;

class ResponsesController extends BaseController
{
    protected $Responses;
    protected $AnswersBlock2;
    protected $AnswersBlock3;
    protected $QuestionsBlock2;

    public function __construct()
    {
        $this->Responses = new Responses();
        $this->AnswersBlock2 = new AnswersBlock2();
        $this->AnswersBlock3 = new AnswersBlock3();
        $this->QuestionsBlock2 = new QuestionsBlock2();
    }

    public function index()
    {
        //
    }

    public function getAllResponsesWithAnswers()
    {
        $responses = $this->Responses->findAll();

        foreach ($responses as &$response) {
            $response['answers_block_2'] = $this->AnswersBlock2->where('response_id', $response['id'])->findAll();
        }

        return $this->response->setJSON($responses);
    }

    public function deleteResponse($id): ResponseInterface
    {
        if (!session()->get('logged_in')) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Unauthorized access.'
            ])->setStatusCode(401);
        }

        try {
            $this->AnswersBlock2->where('response_id', $id)->delete();
            $this->Responses->delete($id);

            return $this->response->setJSON([
                'success' => true,
                'message' => 'Response and related answers deleted successfully.'
            ]);
        } catch (\Exception $e) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'An error occurred while deleting the response: ' . $e->getMessage()
            ]);
        }
    }

    public function getProgressData(): Response
    {
        $data = [];

        $data['total_responden'] =  $this->Responses->where('YEAR(created_at)', date('Y'))->countAllResults();
        // Get all responses first quarter
        $data['total_responden_triwulan1'] =  $this->Responses->where('YEAR(created_at)', date('Y'))
            ->where('QUARTER(created_at)', 1)
            ->countAllResults();
        // Get all responses second quarter
        $data['total_responden_triwulan2'] =  $this->Responses->where('YEAR(created_at)', date('Y'))
            ->where('QUARTER(created_at)', 2)
            ->countAllResults();
        // Get all responses third quarter
        $data['total_responden_triwulan3'] =  $this->Responses->where('YEAR(created_at)', date('Y'))
            ->where('QUARTER(created_at)', 3)
            ->countAllResults();
        // Get all responses fourth quarter
        $data['total_responden_triwulan4'] =  $this->Responses->where('YEAR(created_at)', date('Y'))
            ->where('QUARTER(created_at)', 4)
            ->countAllResults();

        return $this->response->setJSON($data);
    }

    public function test()
    {
        dd(password_hash('Teminabuan9203', PASSWORD_DEFAULT));
    }


}
