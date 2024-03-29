<?php
session_start();
include("DAO/config/bdd_config.inc");
include("inc/utils.php");

include("func/categorie_inc.php");
include("func/produit_inc.php");

// Fonctions du DAO panier
function nbArticlesFromPanier($panier){
    $tabpanier = explode(";", $panier);
    unset($tabpanier[""]);
    return count($tabpanier) - 1;
}

function reconstruitPanierQte($panier){
    $tabpanier = explode(";", $panier);
    $truepanier = array_count_values($tabpanier);
    unset($truepanier[""]);
    return $truepanier;
}

if(isset($_GET['add']) && isset($_GET['id'])){
    $_SESSION['PANIER'].=$_GET['id'].";";
}

if(isset($_GET['ajj']) ){
    $_SESSION['PANIER'].=$_GET['ajj'].";";
}

if(isset($_GET['sub']) ){
    // Ajouter la logique de soustraction depuis le panier
}

if(isset($_GET['remove'])){
    // Ajouter la logique de suppression d'un produit du panier
}

$panierrempli = reconstruitPanierQte($_SESSION['PANIER']);
$montanttotal = 0;
foreach($panierrempli as $idprod=>$qte) {
    $produit = getProduct($bdd,$idprod);
    $montanttotal += $produit['prix'] * $qte;
}

include("vues/panier.php");
?>
