<?php
namespace app\Models;

use CodeIgniter\Controller;
use CodeIgniter\Model;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class loginModel extends Model{
    
    protected $table='e-gestion'
    protected $primaryKey= 'id'
    protected $allowedField=['matricule','poste']
}

?>