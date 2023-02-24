<?php
// Class: Groupement de code (propriété/fonction) qui permettent de creer des objets ($v1 et $v2)
// L'Encapsulation permet d'enfermer dans une capsule les données brute afin d'éviter les erreurs de manipulation ou de corruption des données.
class Voiture
{
    // Private : Element accesible uniquement a l'interrieur de la class. elle ne peut donc pas etre récupéré en dehors.
    protected $marque;
    protected $modele;
    // Public : Element accesible de partout, sur le site ou application.
    // protected : uniquement les enfants d'une class y ont accès.

    // __construct : fonction magique regroupant toutes les méthodes préexistantes qu’une classe peut implémenter. Elle sera appelée lorsqu’un évènement particulier se produira au sein d’une classe.
    public function __construct($marque, $modele)
    {
        // Marque du vehicule
        $this->marque = $marque;
        // Modele du vehicule
        $this->modele = $modele;
        // Vitesse du vehicule
    }
    // function : une fonction regroupe des actions a effectuer, attribué a un objet.
    public function getMarque()
    {
        return $this->marque;
    }
    // Un accesseur (getter) est une méthode qui permet de récupérer un attribut de l’objet instancié, cette méthode porte par convention le préfixe get.
    public function getModele()
    {
        // $this : c’est par elle qu’on fait référence à l’instance de l’objet courant dans une méthode
        return $this->modele;
    }
    // Un mutateur (setter) est une méthode qui permettra la modification d'un attribut, et uniquement cela (en d'autres termes, elle ne renvoie aucune information).Cette méthode porte par convention le préfixe set
    public function setMarque($marque)
    {
        // la valeur $this anonce marque equivaut a $marque
        $this->marque = $marque;
    }
    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    public function getInfo() {
        echo $this->marque;
        echo $this->modele;
    }
    // La fonction__toString() retourne l'objet en chaine de caractère.
    public function __toString()
    {
        // Retourne : le nom et modèle du vehicule "Peugeot 408 / citroën C4" retour a la ligne ;" Retour a la ligne ; Nombre de porte "5/3" retour a la ligne; Le Véhicule "Peugeot / citroën" est "Démarré / à l'arrêt" Retour a la ligne ; Sa vitesse actuelle est de "50/0" km/h; Retour a la ligne;
        return "Nom et modèle du véhicule : " . $this->marque . " " . $this->modele;
    }
}

class VoitureElec extends Voiture
{
    private $autonomie;

    public function __construct($autonomie, $marque, $modele)
    {
        // Autonomie du Véhicule
        $this->autonomie = $autonomie;
        parent::__construct($marque, $modele);
    }
    // function : une fonction regroupe des actions a effectuer, attribué a un objet.
    public function getAutonomie()
    {
        return $this->autonomie;
    }
    public function setAutonomie($autonomie)
    {
        // la valeur $this anonce marque equivaut a $marque
        $this->autonomie = $autonomie;
    }
    public function __toString() {
        return "Nom et modèle du véhicule : " . $this->marque . " " . $this->modele. "Autonomie du Véhicule : " . $this->marque . " " . $this->modele. "est de " . $this->autonomie;
    }
}