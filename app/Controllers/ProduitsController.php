<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProduitsModel;

class ProduitsController extends BaseController
{
    public function index()
    {
        $produitsModel = new ProduitsModel();
        $produits = $produitsModel->findAll();
        return view('template/produits.php', ['produits' => $produits]);
    }


    public function insert()
    {
        $produitsModel = new ProduitsModel();

        $data = [
            'designation'    => $this->request->getPost('designation'),
            'prix_uniter'    => $this->request->getPost('prix_uniter'),
            'quantite_stock' => $this->request->getPost('quantite_stock')
        ];

        $produitsModel->insert($data);

        return redirect()->to('/produits')
                         ->with('success', 'Produit ajouté avec succès');
    }

}
