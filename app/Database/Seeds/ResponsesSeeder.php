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
                'email_address' => $faker->optional()->safeEmail,
                'phone_number' => $faker->optional()->phoneNumber,
                'gender' => $faker->randomElement(['male', 'female']),
                'highest_education' => $faker->randomElement(['<=SLTA/Sederajat', 'D1/D2/D3', 'D4/S1']),
                'primary_occupation' => $faker->jobTitle,
                'organization_category' => $faker->companySuffix,
                'organization_name' => $faker->company,
                'primary_usage' => $faker->word,
                'type_of_service_used' => $faker->numberBetween(1, 10),
                'facilities_used' => $faker->numberBetween(1, 10),
                'has_complaint_history' => $faker->randomElement(['yes', 'no']),
                'created_at' => $faker->dateTimeThisYear()->format('Y-m-d H:i:s'),
                'status' => $faker->randomElement(['active', 'inactive']),
            ];

            $this->db->table('responses')->insert($data);
        }
    }
}
