<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SKDSorselMigration extends Migration
{
    public function up()
    {
        // Users Table
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'full_name' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'password_hash' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'default' => date('Y-m-d H:i:s'),
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'default' => date('Y-m-d H:i:s'),
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');

        // Responses Table
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'full_name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'email_address' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'phone_number' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => true,
            ],
            'gender' => [
                'type' => 'ENUM',
                'constraint' => ['male', 'female'],
                'default' => 'male'
            ],
            'highest_education' => [
                'type' => 'ENUM',
                'constraint' => ['<=SLTA/Sederajat', 'D1/D2/D3', 'D4/S1', 'D4/S1'],
                'default' => '<=SLTA/Sederajat'
            ],
            'primary_occupation' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'organization_category' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'organization_name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'primary_usage' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'type_of_service_used' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'facilities_used' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'has_complaint_history' => [
                'type' => 'ENUM',
                'constraint' => ['yes', 'no'],
                'default' => 'no'
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'default' => date('Y-m-d H:i:s'),
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['active', 'inactive'],
                'default' => 'active'
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('responses');

        // Question Block 2
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'question_code' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'question_text' => [
                'type' => 'TEXT',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('questions_block_2');

        // Answers Block 2
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'response_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'question_block_2_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'importance_level' => [
                'type' => 'INT',
                'constraint' => 4,
                'unsigned' => true,
            ],
            'satisfaction_level' => [
                'type' => 'INT',
                'constraint' => 4,
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('response_id', 'responses', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('question_block_2_id', 'questions_block_2', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('answers_block2');

        // Answers Block 3
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'response_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'suggestion' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('response_id', 'responses', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('answers_block_3');
    }

    public function down()
    {
        //
    }
}
