<?php

use PHPUnit\Framework\TestCase;

require 'Compte.php';
require 'avis.php';
require 'Cathegorie.php';
require 'Commande.php';
require 'DetailCommande.php';
require 'nouveautes.php';
require 'Produit.php';
class Test extends TestCase {

    public function testGetSetNom() {
        // En supposant que le constructeur nécessite 9 paramètres. Vous devez ajouter les paramètres manquants ici.
        $compte = new Compte(1, "Dupont", "Jean", "email@example.com", "jdupont", "userlogin", "password123", "123 rue de la Paix", "Actif");
        $compte->setNom("Durand");
        $this->assertEquals("Durand", $compte->getNom());
    }


    // Test pour les autres attributs...
    // Vous pouvez ajouter des méthodes de test pour chaque getter et setter

    // Par exemple :
    public function testGetSetPrenom() {
        $compte = new Compte(1, "Dupont", "Jean", "email@example.com", "jdupont", "userlogin", "password123", "123 rue de la Paix", "Actif");
        $compte->setPrenom("Paul");
        $this->assertEquals("Paul", $compte->getPrenom());
    }

    public function testAvis() {
        // Ajouter les paramètres appropriés pour votre classe 'avis'
        $avis = new avis(1, 1, 1, '2021-01-01', 'Titre', 'Texte');
        $this->assertInstanceOf(avis::class, $avis);
        $this->assertEquals(1, $avis->getId());
        // Autres assertions pour les autres getters
    }

    public function testCathegorie() {
        $cathegorie = new Cathegorie(1, 'Titre Catégorie', 1);
        $this->assertInstanceOf(Cathegorie::class, $cathegorie);
        $this->assertEquals(1, $cathegorie->getId());
        // Autres assertions pour les autres getters
    }
    public function testCommande() {
        $commande = new Commande(1, 1, '2021-01-01', 'En cours');
        $this->assertInstanceOf(Commande::class, $commande);
        $this->assertEquals(1, $commande->getId());
        // Autres assertions pour les autres getters
    }
    public function testDetailCommande() {
        $detailCommande = new DetailCommande(1, 1, 1, 5);
        $this->assertInstanceOf(DetailCommande::class, $detailCommande);
        $this->assertEquals(1, $detailCommande->getId());
        // Autres assertions pour les autres getters
    }
    public function testNouveautes() {
        $nouveaute = new nouveautes(1);
        $this->assertInstanceOf(nouveautes::class, $nouveaute);
        $this->assertEquals(1, $nouveaute->getId());
    }
    public function testProduitConstructAndGetters() {
        // Remplacez ceci par les vrais arguments pour le constructeur de votre classe Produit
        $produit = new Produit(1, "Nom du Produit", "Description du Produit", 10.99, 1);

        // Test si l'instance est créée correctement
        $this->assertInstanceOf(Produit::class, $produit);

        // Test des getters
        $this->assertEquals(1, $produit->getId());
        $this->assertEquals("Nom du Produit", $produit->getTitre());
        $this->assertEquals("Description du Produit", $produit->getDescription());
        $this->assertEquals(10.99, $produit->getPrix());
        $this->assertEquals(1, $produit->getIdCat());
    }


    // Continuez avec des méthodes similaires pour tester les autres getters et setters...
}

?>
