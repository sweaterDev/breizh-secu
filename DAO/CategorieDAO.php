<?php 
namespace DAO;

require_once('../model/Categorie.php');
use Categorie;
use PDO;

class CategorieDAO {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function selectAll() {
        $stmt = $this->pdo->prepare("SELECT * FROM categorie ORDER BY idcat");
        $stmt->execute();
        $categorieList = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $categorieList[] = new Categorie($row['idcat'], $row['titre'], $row['ordre']);
        }
        return $categorieList;
    }
    public function selectById($idCat) {
        $stmt = $this->pdo->prepare("SELECT * FROM categorie WHERE idcat = :idCat");
        $stmt->bindValue(':idCat', $idCat, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            return new Categorie($row['idcat'], $row['titre'], $row['ordre']);
        }
        return null;
    }
}

?>