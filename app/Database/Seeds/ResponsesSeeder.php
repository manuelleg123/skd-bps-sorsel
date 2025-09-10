<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory as Faker;

class ResponsesSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 50; $i++) {
            $data = [
                'full_name' => $faker->name,
                'gender' => $faker->randomElement(['male', 'female']),
                'highest_education' => $faker->randomElement(['<=SLTA/Sederajat', 'D1/D2/D3', 'D4/S1']),
                'has_complaint_history' => $faker->randomElement(['yes', 'no']),
                'created_at' => $faker->dateTimeThisYear()->format('Y-m-d H:i:s'),
                'status' => $faker->randomElement(['active', 'inactive']),
            ];

            $this->db->table('responses')->insert($data);
        }
    }
}
