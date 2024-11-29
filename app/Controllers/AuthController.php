<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class AuthController extends Controller
{
    protected $session;
    protected $userModel;
    

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->userModel = new UserModel();
    }

    public function login()
    {

        // Si déjà connecté, rediriger vers le tableau de bord approprié
        if ($this->session->get('isLoggedIn')) {
            return $this->redirectToDashboard($this->session->get('role'));
        }

        // Afficher la page de connexion
        return view('login');
    }

    
    public function authenticate()
    {
        $matricule = $this->request->getPost('matricule');
        $password = $this->request->getPost('password');

        $user = $this->userModel->verifyUser($matricule, $password);

        if ($user) {
            // Créer une session pour l'utilisateur
            $this->session->set([
                'id' => $user['id'],
                'matricule' => $user['matricule'],
                'role' => $user['role'],
                'nom' => $user['nom'],
                'prenom' => $user['prenom'],
                'isLoggedIn' => true
            ]);

            // Rediriger vers le tableau de bord approprié
            return $this->redirectToDashboard($user['role']);
        } else {
            // Échec de connexion
            return redirect()->back()->with('error', 'Matricule ou mot de passe incorrect');
        }
    }

    public function logout()
    {
        // Détruire la session
        $this->session->destroy();
        return redirect()->to('/login');
    }

    private function redirectToDashboard($role)
    {
        switch($role) {
            case 'RH':
                return redirect()->to('/dashboard/rh');
            case 'ADMIN':
                return redirect()->to('/dashboard/administration');
            case 'SECURITE':
                return redirect()->to('/dashboard/securite');
            case 'FINANCE':
                return redirect()->to('/dashboard/finance');
            case 'OPERATION':
                return redirect()->to('/dashboard/operations');
            default:
                return redirect()->to('/login');
        }
    }
}