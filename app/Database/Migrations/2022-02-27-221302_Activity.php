<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Activity extends Migration
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
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);
        // Membuat tabel news
        $this->forge->createTable('activity', TRUE);
    }

    public function down()
    {
        //
    }
}
