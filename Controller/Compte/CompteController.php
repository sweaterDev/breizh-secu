<?php
namespace DAO;
include('Connexion.php');
global $CONFIG;
require_once('CompteDAO.php');

class CompteController {

    private $compteDAO;

    public function __construct() {
        global $CONFIG;
        $this->compteDAO = new CompteDAO($CONFIG);
    }

    public function getAllComptes() {
       $comptes= $this->compteDAO->selectAll();
       include('ListeUser.php');

    }
}

$c=new CompteController();
$c->getAllComptes();

?>
