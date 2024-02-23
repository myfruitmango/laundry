<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Laundry extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([

            'id'        => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'customer_id'        => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => true
            ],
            'activity_id'        => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => true
            ],
            'service_id'        => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => true
            ],
            'user_id'        => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => true
            ],
            'invoice'      => [
                'type'           => 'varchar',
                'constraint'     => 50,
                'null'           => true
            ],
            'weight'      => [
                'type'           => 'float',
                'null'           => true
            ],
            'price'   => [
                'type'           => 'int',
                'constraint'     => 13,
                'null'           => true
            ],
            'paid'     => [
                'type'           => 'int',
                'constraint'     => 13,
                'null'           => true
            ],
            'qty'     => [
                'type'           => 'int',
                'constraint'     => 11,
                'null'           => true
            ],
            'note'     => [
                'type'           => 'varchar',
                'constraint'     => 255,
                'null'           => true
            ],
            'result'   => [
                'type'           => 'float',
                'null'           => true
            ],
            'status'     => [
                'type'           => 'ENUM',
                'constraint'     => ['Lunas', 'Belum Lunas'],
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
            'finished_at'         => [
                'type'           => 'datetime',
                'null'           => true
            ],


        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('laundry', TRUE);
    }

    public function down()
    {
        //
    }
}
