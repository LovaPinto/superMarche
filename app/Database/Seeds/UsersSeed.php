<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeed extends Seeder
{
    public function run()
    {
        $users = [
            [
                'nom' => 'Admin',
                'prenom' => 'User',
                'email' => 'admin@example.com',
                'mot_de_passe' => password_hash('admin', PASSWORD_BCRYPT),
                'id_role' => 1
            ],
            [
                'nom' => 'User',
                'prenom' => 'Test',
                'email' => 'user@example.com',
                'mot_de_passe' => password_hash('user', PASSWORD_BCRYPT),
                'id_role' => 2
            ]
        ];

        $this->db->table('users')->insertBatch($users);
    }
}
