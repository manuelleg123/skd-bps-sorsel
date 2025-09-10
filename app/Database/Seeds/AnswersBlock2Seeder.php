<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AnswersBlock2Seeder extends Seeder
{
    public function run()
    {
        $responseIds = $this->db->table('responses')->select('id')->get()->getResultArray();
        $questionIds = $this->db->table('questions_block_2')->select('id')->get()->getResultArray();

        foreach ($responseIds as $response) {
            foreach ($questionIds as $question) {
                $data = [
                    'response_id' => $response['id'],
                    'question_block_2_id' => $question['id'],
                    'importance_level' => rand(1, 10),
                    'satisfaction_level' => rand(1, 10),
                ];
                $this->db->table('answers_block2')->insert($data);
            }
        }
    }
}