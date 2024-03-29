<?php
namespace DAO;
use model\Compte;

include('Connexion.php');
global $CONFIG;
require_once('CompteDAO.php');

class InscriptionController2{
    private $compteDAO;

    public function __construct() {
        global $CONFIG;
        $this->compteDAO = new CompteDAO($CONFIG);
    }

    public function traiterInscription(){
        $compte = new Compte(null, $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['identifiant'], $_POST['login'], $_POST['password'], $_POST['adresse'], 'Utilisateur');
        // Insertion du compte dans la base de données
        $this->compteDAO->insert($compte);
    }

}
$controller = new InscriptionController2();
$controller->traiterInscription();
header('Location: http://localhost/Breizhsecu3/DAO/CompteController.php');

?>