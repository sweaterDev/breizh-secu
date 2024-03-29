<?php
namespace DAO;
use Compte;

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
        // Valider et filtrer les données entrantes
        $nom = filter_var($_POST['nom'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $prenom = filter_var($_POST['prenom'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hachage sécurisé du mot de passe
        $adresse = filter_var($_POST['adresse'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // Création d'un objet Compte
        $compte = new Compte($nom, $prenom, $email, $password, $adresse, 'Utilisateur');

        // Insertion du compte dans la base de données
        $this->compteDAO->insert($compte);
    }
}

// Instanciation du contrôleur et traitement de l'inscription
$controller = new InscriptionController2();
$controller->traiterInscription();

// Redirection après l'inscription
header('Location: http://localhost/Breizhsecu3/DAO/CompteController.php');
?>
