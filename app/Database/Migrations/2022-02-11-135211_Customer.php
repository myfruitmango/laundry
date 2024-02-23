<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Customer extends Migration
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
            'name'      => [
                'type'           => 'varchar',
                'constraint'     => 255,
            ],
            'address'   => [
                'type'           => 'varchar',
                'constraint'     => 255,
            ],
            'phone'     => [
                'type'           => 'varchar',
                'constraint'     => 50,
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
        $this->forge->createTable('customer', TRUE);
    }

    public function down()
    {
        //
        $this->forge->dropTable('customer', true);
    }
}
