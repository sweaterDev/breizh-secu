<?php

class Commande{
    private $id;
    private $idcompte;
    private $date;
    private $statut;

    /**
     * @param $id
     * @param $idcompte
     * @param $date
     * @param $statut
     */
    public function __construct($id, $idcompte, $date, $statut)
    {
        $this->id = $id;
        $this->idcompte = $idcompte;
        $this->date = $date;
        $this->statut = $statut;
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
    public function getIdcompte()
    {
        return $this->idcompte;
    }

    /**
     * @param mixed $idcompte
     */
    public function setIdcompte($idcompte)
    {
        $this->idcompte = $idcompte;
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
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param mixed $statut
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    }
}