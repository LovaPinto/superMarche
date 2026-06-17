<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGestionStock extends Migration
{
    public function up()
    {
        // produits
        $this->forge->addField([
            'id' => [
                'type'           => 'INTEGER',
                'auto_increment' => true,
            ],
            'designation' => [
                'type' => 'TEXT',
            ],
            'prix_uniter' => [
                'type' => 'REAL',
            ],
            'quantite_stock' => [
                'type'       => 'INTEGER',
                'default'    => 0,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('produits');

        // caisse
        $this->forge->addField([
            'id' => [
                'type'           => 'INTEGER',
                'auto_increment' => true,
            ],
            'numero_caisse' => [
                'type' => 'TEXT',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('caisse');

        // achat
        $this->forge->addField([
            'id' => [
                'type'           => 'INTEGER',
                'auto_increment' => true,
            ],
            'id_produit' => [
                'type' => 'INTEGER',
            ],
            'id_caisse' => [
                'type' => 'INTEGER',
            ],
            'quantite' => [
                'type' => 'INTEGER',
            ],
            'date_achat' => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
        ]);

        $this->forge->addKey('id', true);

        $this->forge->addForeignKey(
            'id_produit',
            'produits',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->forge->addForeignKey(
            'id_caisse',
            'caisse',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->forge->createTable('achat');
    }

    public function down()
    {
        $this->forge->dropTable('achat');
        $this->forge->dropTable('caisse');
        $this->forge->dropTable('produits');
    }
}
