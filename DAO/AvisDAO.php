<?php
namespace DAO;

require_once('../model/Avis.php');
use Avis;
use PDO;

class AvisDAO {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function insertAvis($idCompte, $idProduit, $date, $titreAvis, $texteAvis) {
        $stmt = $this->pdo->prepare("INSERT INTO avis (idcompte, idproduit, date, titre, texte) VALUES (:idCompte, :idProduit, :date, :titre, :texte)");
        $stmt->execute([
            ':idCompte' => $idCompte,
            ':idProduit' => $idProduit,
            ':date' => $date,
            ':titre' => $titreAvis,
            ':texte' => $texteAvis
        ]);
        return $this->pdo->lastInsertId();
    }
}



?>