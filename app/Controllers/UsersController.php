<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UsersModel;

class UsersController extends BaseController
{
    public function index()
    {
        return view('template/login.php');
    }

   public function login()
{
    $nom = $this->request->getPost('nom');
    $mot_de_passe = $this->request->getPost('mot_de_passe');

    $users = new UsersModel();
    $user = $users->where('email', $nom)->first();

    if ($user && password_verify($mot_de_passe, $user['mot_de_passe'])) {
        return redirect()->to('/produits')
                         ->with('success', 'Connexion réussie');
    } else {
        return redirect()->back()
                         ->with('error', 'Nom d\'utilisateur ou mot de passe incorrect')
                         ->withInput();
    }
}
}
