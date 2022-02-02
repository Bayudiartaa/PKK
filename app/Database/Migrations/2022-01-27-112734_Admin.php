<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 125,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 125,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 125,
                'unique' => TRUE,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 125,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => TRUE,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => TRUE,
            ],  
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('data_admin');
    }

    public function down()
    {
        // menghapus tabel data_admin
        $this->forge->dropTable('data_admin');
    }
}
