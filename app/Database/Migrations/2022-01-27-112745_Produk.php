<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 125,
            ],
            'deskripsi' => [
                'type' => 'TEXT',
                'constraint' => 125,
            ],
            'gambar' => [
                'type' => 'VARCHAR',
                'constraint' => 125,
            ],
            'url_slug' => [
                'type' => 'VARCHAR',
                'constraint' => 125,
                'unique' => TRUE,
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
        $this->forge->createTable('data_produk');
    }

    public function down()
    {
        $this->forge->dropTable('data_produk');
    }
}
