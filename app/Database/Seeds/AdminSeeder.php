<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama' => 'SuperAdmin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => password_hash('password', PASSWORD_DEFAULT),
            'created_at' => Time::now(),
        ];
        $this->db->table('data_admin')->insert($data);
    }
}
