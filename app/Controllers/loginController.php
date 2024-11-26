<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class loginController extends Controllers{
    protected $table='e-gestion'
    protected $primaryKey= 'id'
    protected $allowedField=['matricule','poste']

}
?>