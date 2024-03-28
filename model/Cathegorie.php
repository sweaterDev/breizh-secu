<?php

class Cathegorie{
    private $id;
    private $titre;
    private $ordre;

    /**
     * @param $id
     * @param $titre
     * @param $ordre
     */
    public function __construct($id, $titre, $ordre)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->ordre = $ordre;
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
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * @param mixed $ordre
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;
    }

}