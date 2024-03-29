<?php
namespace DAO;

require_once('../model/Produit.php');
use Produit;
use PDO;

class ProduitDAO {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function selectAll() {
        $stmt = $this->pdo->prepare("SELECT * FROM produit");
        $stmt->execute();
        $produits = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $produits[] = new Produit($row['idproduit'], $row['titre'], $row['description'], $row['prix'], $row['idcat']);
        }
        return $produits;
    }

    public function selectById($idProduit) {
        $stmt = $this->pdo->prepare("SELECT * FROM produit WHERE idproduit = :idProduit");
        $stmt->bindValue(':idProduit', $idProduit, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            return new Produit($row['idproduit'], $row['titre'], $row['description'], $row['prix'], $row['idcat']);
        }
        return null;
    }
}
?>