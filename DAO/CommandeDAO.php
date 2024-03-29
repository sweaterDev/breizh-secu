<?
namespace DAO;

require_once('../model/DetailCommande.php');
use DetailCommande;
use PDO;

class DetailCommandeDAO {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function insertDetailCommande($idcde, $idProduit, $quantite) {
        $stmt = $this->pdo->prepare("INSERT INTO detailcommande (idcde, idproduit, qte) VALUES (:idcde, :idProduit, :quantite)");
        $stmt->execute([
            ':idcde' => $idcde,
            ':idProduit' => $idProduit,
            ':quantite' => $quantite
        ]);
        return $this->pdo->lastInsertId();
    }

    public function selectByCommandeId($idCommande) {
        $stmt = $this->pdo->prepare("SELECT * FROM detailcommande WHERE idcde = :idCommande");
        $stmt->bindValue(':idCommande', $idCommande, PDO::PARAM_INT);
        $stmt->execute();
        $details = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $details[] = new DetailCommande($row['iddetail'], $row['idcde'], $row['idproduit'], $row['qte']);
        }
        return $details;
    }
}
?>
