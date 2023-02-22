<?php

class Voiture
{
    private $marque;
    private $modele;
    private $nbPortes;
    private $vitesseActuelle;

    public function __construct($marque, $modele, $nbPortes)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->vitesseActuelle = $vitesseActuelle = 0;
    }
    public function demarrer()
    {
    }

    public function stopper()
    {
    }

    public function accellerer($vitesseAcceleration)
    {
        return $this->vitesseActuelle;
    }

    public function getMarque()
    {
        return $this->marque;
    }
    public function getModele()
    {
        return $this->modele;
    }
    public function getNbPortes()
    {
        return $this->nbPortes;
    }
    public function getVitesseActuelle()
    {
        return $this->vitesseActuelle;
    }
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }
    public function setModele($modele)
    {
        $this->modele = $modele;
    }
    public function setNbPortes($nbPortes)
    {
        $this->nbPortes = $nbPortes;
    }
    public function setVitesseActuelle($vitesseActuelle)
    {
        $this->vitesseActuelle = $vitesseActuelle;
    }
    public function __toString()
    {
        return "Nom du véhicule : " . $this->marque . "<br> Modèle du véhicule : " . $this->modele . "<br> Nombre de porte : " . $this->nbPortes . "<br> Sa vitesse actuelle est de " . $this->vitesseActuelle . " KM/H <br>";
    }
}