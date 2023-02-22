<?php
class Personne
{
    private $nom;
    private $prenom;
    private DateTime $dateNaissance;

    public function __construct($nom, $prenom, $dateNaissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = new DateTime ($dateNaissance);
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }
    public function __toString()
    {
        return "Je m'appel(le) " . $this->nom . " " . $this->prenom . " " . "Et je suis né(e) le : " . $this->dateNaissance->format('d-m-Y');
    }
}