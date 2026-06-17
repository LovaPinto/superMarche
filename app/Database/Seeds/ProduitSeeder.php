<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProduitSeeder extends Seeder
{
    public function run()
    {
        $produits = [
            [
                'designation' => 'Riz blanc',
                'prix_uniter' => 3500,
                'quantite_stock' => 100
            ],
            [
                'designation' => 'Huile alimentaire',
                'prix_uniter' => 12000,
                'quantite_stock' => 50
            ],
            [
                'designation' => 'Sucre',
                'prix_uniter' => 4500,
                'quantite_stock' => 80
            ],
            [
                'designation' => 'Savon',
                'prix_uniter' => 1500,
                'quantite_stock' => 200
            ],
            [
                'designation' => 'Lait en poudre',
                'prix_uniter' => 18000,
                'quantite_stock' => 30
            ]
        ];

        $this->db->table('produits')->insertBatch($produits);
    }
}