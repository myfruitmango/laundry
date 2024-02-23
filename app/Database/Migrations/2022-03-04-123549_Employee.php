<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Employee extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'user_id'        => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => true
            ],
            'nik'      => [
                'type'           => 'varchar',
                'constraint'     => 255,
                'null'           => true
            ],
            'first_name'      => [
                'type'           => 'varchar',
                'constraint'     => 255,
                'null'           => true
            ],
            'last_name'      => [
                'type'           => 'varchar',
                'constraint'     => 255,
                'null'           => true
            ],
            'address'      => [
                'type'           => 'varchar',
                'constraint'     => 255,
                'null'           => true
            ],
            'phone'   => [
                'type'           => 'varchar',
                'constraint'     => 50,
                'null'           => true
            ],
            'salary'   => [
                'type'           => 'int',
                'constraint'     => 13,
                'null'           => true
            ],
            'created_at'         => [
                'type'           => 'datetime',
                'null'           => true
            ],
            'updated_at'         => [
                'type'           => 'datetime',
                'null'           => true
            ],
            'deleted_at'         => [
                'type'           => 'datetime',
                'null'           => true
            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);
        // Membuat tabel news
        // $this->forge->addForeignKey('id_customer', 'customer', 'id_customer', '', 'CASCADE');
        // $this->forge->addForeignKey('id_activity', 'acttivity', 'id_activity', '', 'CASCADE');
        // $this->forge->addForeignKey('id_service', 'service', 'id_service', 'CASCADE', 'CASCADE');
        $this->forge->createTable('employee', TRUE);
    }

    public function down()
    {
        //
    }
}
