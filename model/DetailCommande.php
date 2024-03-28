<?php

class DetailCommande{
    private $id;
    private $dCommande;
    private $idProduit;
    private $quantite;

    /**
     * @param $id
     * @param $dCommande
     * @param $idProduit
     * @param $quantite
     */
    public function __construct($id, $dCommande, $idProduit, $quantite)
    {
        $this->id = $id;
        $this->dCommande = $dCommande;
        $this->idProduit = $idProduit;
        $this->quantite = $quantite;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDCommande()
    {
        return $this->dCommande;
    }

    /**
     * @param mixed $dCommande
     */
    public function setDCommande($dCommande)
    {
        $this->dCommande = $dCommande;
    }

    /**
     * @return mixed
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * @param mixed $idProduit
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;
    }

    /**
     * @return mixed
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param mixed $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

}