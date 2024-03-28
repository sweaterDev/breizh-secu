<?php

class avis{
    private $id;
    private $idCompte;
    private $idProduit;
    private $date;
    private $titre;
    private $texte;

    /**
     * @param $id
     * @param $idCompte
     * @param $idProduit
     * @param $date
     * @param $titre
     * @param $texte
     */
    public function __construct($id, $idCompte, $idProduit, $date, $titre, $texte)
    {
        $this->id = $id;
        $this->idCompte = $idCompte;
        $this->idProduit = $idProduit;
        $this->date = $date;
        $this->titre = $titre;
        $this->texte = $texte;
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
    public function getIdCompte()
    {
        return $this->idCompte;
    }

    /**
     * @param mixed $idCompte
     */
    public function setIdCompte($idCompte)
    {
        $this->idCompte = $idCompte;
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
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * @param mixed $texte
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;
    }
}