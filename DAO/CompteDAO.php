<?php

namespace DAO;
include('Connexion.php');
require_once('..\model\Compte.php');

use model\Compte;
use PDO;
use PDOException;


class CompteDAO {

    private $pdo;

    public function __construct($CONFIG){

        try {
            $this->pdo = new PDO("mysql:host={$CONFIG['HOST']};dbname={$CONFIG['BDD']}", $CONFIG['LOGIN'], $CONFIG['MDP']);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }

    public function selectAll() {
        $stmt = $this->pdo->prepare("SELECT * FROM compte");
        $stmt->execute();

        $comptes = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $comptes[] = new Compte($row['id'], $row['nom'], $row['prenom'], $row['email'], $row['identifiant'], $row['password'], $row['password'], $row['adresse'], $row['statut']);
        }
        return $comptes;
    }

    public function insert($inscription) {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO compte (nom, prenom, email, identifiant, password, adresse, statut) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([
                $inscription->getNom(),
                $inscription->getPrenom(),
                $inscription->getEmail(),
                $inscription->getIdentifiant(),
                $inscription->getPassword(), // Assurez-vous de traiter le mot de passe de manière sécurisée (ex : hashing)
                $inscription->getAdresse(),
                $inscription->getStatut()
            ]);

            return $this->pdo->lastInsertId();
        } catch (PDOException $e) {
            // Gérer l'exception ou la renvoyer
            throw $e;
        }
    }
}