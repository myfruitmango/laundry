<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Service extends Migration
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
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'price'      => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'day'      => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'type'     => [
                'type'           => 'ENUM',
                'constraint'     => ['Kg'],
            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);
        // Membuat tabel news
        $this->forge->createTable('service', TRUE);
    }

    public function down()
    {
        //
    }
}
