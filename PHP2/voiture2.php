<?php
class Voiture
{
   
    protected $marque;
    protected $modele;
   

    public function __construct($marque, $modele)
    {
        $this->marque = $marque;
        
        $this->modele = $modele;
    }
    public function getMarque()
    {
        return $this->marque;
    }
    public function getModele()
    {
        return $this->modele;
    }
    
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }
    public function setModele($modele)
    {
        $this->modele = $modele;
    }
    public function getInfo()
    {
        echo "Marque et modèle du Véhicule : " . $this->marque . " " . $this->modele;
    }
}

class VoitureElec extends Voiture
{
    private $autonomie;

    public function __construct($marque, $modele, $autonomie, )
    {
        parent::__construct($marque, $modele);
        $this->autonomie = $autonomie;
    }
    public function getAutonomie()
    {
        return $this->autonomie;
    }
    public function setAutonomie($autonomie)
    {
        $this->autonomie = $autonomie;
    }
    public function getInfo()
    {
        echo "Le Vehicule : " . $this->marque . " " . $this->modele . " à " . $this->autonomie . " KM d'autonomie";
    }
}