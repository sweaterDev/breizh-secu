<?php

class Compte{

    private $id;
    private $nom;
    private $prenom;
    private $Email;
    private $Identifiant;
    private $login;
    private $password;
    private $adresse;
    private $statut;

    /**
     * @param $id
     * @param $nom
     * @param $prenom
     * @param $Email
     * @param $Identifiant
     * @param $login
     * @param $password
     * @param $adresse
     * @param $statut
     */
    public function __construct($id, $nom, $prenom, $Email, $Identifiant, $login, $password, $adresse, $statut)
    {
        $this->id= $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->Email = $Email;
        $this->Identifiant = $Identifiant;
        $this->login = $login;
        $this->password = $password;
        $this->adresse = $adresse;
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
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param mixed $Email
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    /**
     * @return mixed
     */
    public function getIdentifiant()
    {
        return $this->Identifiant;
    }

    /**
     * @param mixed $Identifiant
     */
    public function setIdentifiant($Identifiant)
    {
        $this->Identifiant = $Identifiant;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
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