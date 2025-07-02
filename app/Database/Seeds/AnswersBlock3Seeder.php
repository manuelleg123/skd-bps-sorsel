<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory as Faker;

class AnswersBlock3Seeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');
        $responseIds = $this->db->table('responses')->select('id')->get()->getResultArray();

        foreach ($responseIds as $response) {
            $data = [
                'response_id' => $response['id'],
                'suggestion' => $faker->optional()->sentence,
            ];
            $this->db->table('answers_block_3')->insert($data);
        }
    }
}
