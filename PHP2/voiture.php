<?php

class Voiture
{
    private $marque;
    private $modele;
    private $nbPortes;
    private $vitesseActuelle;
    private $etat;

    public function __construct($marque, $modele, $nbPortes)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->vitesseActuelle = 0;
        $this->etat = false;
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
    public function demarrer()
    {

    }
    public function accelerer($vitesseAcceleration)
    {
        $this->vitesseActuelle += $vitesseAcceleration;
    }

    public function stop()
    {
    }

    public function __toString()
    {
        return "Nom du véhicule : " . $this->marque . "<br> Modèle du véhicule : " . $this->modele . "<br> Nombre de porte : " . $this->nbPortes . "<br> Sa vitesse actuelle est de " . $this->vitesseActuelle . " KM/H <br>";
    }
}