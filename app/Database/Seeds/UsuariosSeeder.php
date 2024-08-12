<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    public function run()
    {
        // create 3 usuarios
        $usuarios = [
            [
                'usuario' => 'user1',
                'senha' => password_hash('user1', PASSWORD_DEFAULT),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'usuario' => 'user2',
                'senha' => password_hash('user2', PASSWORD_DEFAULT),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'usuario' => 'user3',
                'senha' => password_hash('user3', PASSWORD_DEFAULT),
                'created_at' => date('Y-m-d H:i:s')
            ],
        ];

        // insert all usuarios
        $this->db->table('usuarios')->insertBatch($usuarios);
    }
}
