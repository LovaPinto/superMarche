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
        // Table role
$this->forge->addField([
    'id' => [
        'type'           => 'INTEGER',
        'auto_increment' => true,
    ],
    'nom_role' => [
        'type'       => 'TEXT',
        'null'       => false,
    ],
]);

$this->forge->addKey('id', true);
$this->forge->addUniqueKey('nom_role');
$this->forge->createTable('role');

// Table users
$this->forge->addField([
    'id' => [
        'type'           => 'INTEGER',
        'auto_increment' => true,
    ],
    'nom' => [
        'type'       => 'TEXT',
        'null'       => false,
    ],
    'prenom' => [
        'type'       => 'TEXT',
        'null'       => false,
    ],
    'email' => [
        'type'       => 'TEXT',
        'null'       => false,
    ],
    'mot_de_passe' => [
        'type'       => 'TEXT',
        'null'       => false,
    ],
    'id_role' => [
        'type'       => 'INTEGER',
        'null'       => false,
    ],
]);

$this->forge->addKey('id', true);
$this->forge->addUniqueKey('email');

$this->forge->addForeignKey(
    'id_role',
    'role',
    'id',
    'CASCADE',
    'CASCADE'
);

$this->forge->createTable('users');
    }

   public function down()
{
    $this->forge->dropTable('users');
    $this->forge->dropTable('role');

    $this->forge->dropTable('achat');
    $this->forge->dropTable('caisse');
    $this->forge->dropTable('produits');
}
}
