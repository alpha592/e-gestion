<?php

namespace App\Controllers;

class Home extends BaseController
{
   public function index(): string
   {
    //   return view('welcome_message');
       return view('login');
    }

    public function addUser(){

        
    }

    // public function index()
    // {
    //     $db = \Config\Database::connect();

    //     if ($db->connID) {
    //         echo "Connexion réussie !";
    //     } else {
    //         echo "Erreur de connexion : " . $db->error();
    //     }
    // }
    
}
