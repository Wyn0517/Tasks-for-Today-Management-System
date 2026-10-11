<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('users');

        // Prevent duplicate record on re-run
        $builder->truncate();

        $userData = [
            'username'   => 'msumiguel',
            'full_name'  => 'Mark Snowpher Miguel',
            'email'      => 'miguelmarksnowpher@gmail.com',
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $builder->insert($userData);
    }
}
