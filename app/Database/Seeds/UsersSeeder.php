<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory as Faker;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 20; $i++) {
            $data = [
                'full_name' => $faker->name,
                'password_hash' => password_hash('password', PASSWORD_DEFAULT),
                'email' => $faker->unique()->safeEmail,
                'created_at' => $faker->dateTimeThisYear()->format('Y-m-d H:i:s'),
                'updated_at' => $faker->dateTimeThisYear()->format('Y-m-d H:i:s'),
            ];

            $this->db->table('users')->insert($data);
        }
    }
}
