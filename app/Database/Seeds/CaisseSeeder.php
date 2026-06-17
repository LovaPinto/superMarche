<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CaisseSeeder extends Seeder
{
    public function run()
    {
        $caisses = [
            ['numero_caisse' => 'CAISSE-001'],
            ['numero_caisse' => 'CAISSE-002']
        ];

        $this->db->table('caisse')->insertBatch($caisses);
    }
}