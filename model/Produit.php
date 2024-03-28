<?php

class Produit{

    private $id;
    private $titre;
    private $description;
    private $prix;
    private $idcat;

    /**
     * @param $id
     * @param $titre
     * @param $description
     * @param $prix
     * @param $idcat
     */
    public function __construct($id, $titre, $description, $prix, $idcat)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->description = $description;
        $this->prix = $prix;
        $this->idcat = $idcat;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $idp
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getIdcat()
    {
        return $this->idcat;
    }

    /**
     * @param mixed $idcat
     */
    public function setIdcat($idcat)
    {
        $this->idcat = $idcat;
    }

}