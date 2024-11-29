<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    protected $session;
    public function __construct()
{
    $this->session = \Config\Services::session();
}


    public function rhDashboard()
    {
        // Vérifier les permissions
        if ($this->session->get('role') !== 'RH') {
            return redirect()->to('/login');
        }

        $data = [
            'username' => $this->session->get('prenom') . ' ' . $this->session->get('nom'),
            'title' => 'Tableau de Bord RH'
        ];

        return view('dashboard/rh', $data);
    }

    public function administrationDashboard()
    {
        // Vérifier les permissions
        if ($this->session->get('role') !== 'ADMIN') {
            return redirect()->to('/login');
        }

        $data = [
            'username' => $this->session->get('prenom') . ' ' . $this->session->get('nom'),
            'title' => 'Tableau de Bord Administration'
        ];

        return view('dashboard/administration', $data);
    }

    public function securiteDashboard()
    {
        // Vérifier les permissions
        if ($this->session->get('role') !== 'SECURITE') {
            return redirect()->to('/login');
        }

        $data = [
            'username' => $this->session->get('prenom') . ' ' . $this->session->get('nom'),
            'title' => 'Tableau de Bord Sécurité'
        ];

        return view('dashboard/securite', $data);
    }

    public function financeDashboard()
    {
        // Vérifier les permissions
        if ($this->session->get('role') !== 'FINANCE') {
            return redirect()->to('/login');
        }

        $data = [
            'username' => $this->session->get('prenom') . ' ' . $this->session->get('nom'),
            'title' => 'Tableau de Bord Finance'
        ];

        return view('dashboard/finance', $data);
    }

    public function operationsDashboard()
    {
        // Vérifier les permissions
        if ($this->session->get('role') !== 'OPERATION') {
            return redirect()->to('/login');
        }

        $data = [
            'username' => $this->session->get('prenom') . ' ' . $this->session->get('nom'),
            'title' => 'Tableau de Bord Opérations'
        ];

        return view('dashboard/operations', $data);
    }
}