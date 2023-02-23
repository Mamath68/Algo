<?php
// Class: Groupement de fonction associé a un objet(Voiture dans le cas actuel)
class Voiture
{
    // Private : Element accesible uniquement a l'interrieur de la class. elle ne peut donc pas etre récupéré en dehors.
    private $marque;
    private $modele;
    private $nbPortes;
    private $vitesseActuelle;
    private $etat;
    // Public : Element accesible de partout, sur le site ou application, et donc modifiable par l'utilisateur.

    // __construct : fonction magique regroupant toutes les méthodes préexistantes qu’une classe peut implémenter. Elle sera appelée lorsqu’un évènement particulier se produira au sein d’une classe.
    public function __construct($marque, $modele, $nbPortes)
    {
        // Marque du vehicule
        $this->marque = $marque;
        // Modele du vehicule
        $this->modele = $modele;
        // Nombre de porte
        $this->nbPortes = $nbPortes;
        // Vitesse du vehicule
        $this->vitesseActuelle = 0;
        // Etat du vehicule (demarrer / a l'arret)
        $this->etat = false;
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
    public function getNbPortes()
    {
        return $this->nbPortes;
    }
    public function getVitesseActuelle()
    {
        // la valeur $this equivaut a vitesseActuelle
        return $this->vitesseActuelle;
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
        $this->etat = 'Allumé';
    }
    public function accelerer($vitesseAcceleration)
    { //pour obtenir la vitesse d'acceleration, j'additionne la vitesse actuelle avec elle-même.
        $this->vitesseActuelle += $vitesseAcceleration;
    }

    public function stop()
    {
        $this->etat = "à l'arret";
    }
    // La fonction__toString() retourne l'élement en chaine de caractère.
    public function __toString()
    {
        // Retourne : le nom du vehicule "Peugeot / citroën" retour a la ligne ; le modèle du véhicule : "408/C4" Retpir a la ligne ; Nombre de porte "5/3" retour a la ligne; Le Véhicule "Peugeot / citroën" est "Démarré / à l'arrêt" Retour a la ligne ; Sa vitesse actuelle est de "50(Peugeot)/0(C4)" km/h; Retour a la ligne;
        return "Nom du véhicule : " . $this->marque . "<br> Modèle du véhicule : " . $this->modele . "<br> Nombre de porte : " . $this->nbPortes . "<br>" . "Le Vehicule " . $this->marque . " est " . $this->etat . "<br> Sa vitesse actuelle est de : " . $this->vitesseActuelle . " KM/H <br>";
    }
}
// class voitureElec extends Voiture
// {
//     private $marque;
//     private $modele;
//     private $autonomie;
    
//     // __construct : fonction magique regroupant toutes les méthodes préexistantes qu’une classe peut implémenter. Elle sera appelée lorsqu’un évènement particulier se produira au sein d’une classe.
//     public function __construct($marque, $modele, $nbPortes)
//     {
//         // Marque du vehicule
//         $this->marque = $marque;
//         // Modele du vehicule
//         $this->modele = $modele;
//         // Vitesse du vehicule
//         $this->autonomie = 0;
//     }
//     // function : une fonction regroupe des actions a effectuer, attribué a un objet.
//     public function getMarque()
//     {
//         return $this->marque;
//     }
//     // Un accesseur (getter) est une méthode qui permet de récupérer un attribut de l’objet instancié, cette méthode porte par convention le préfixe get.
//     public function getModele()
//     {
//         // $this : c’est par elle qu’on fait référence à l’instance de l’objet courant dans une méthode
//         return $this->modele;
//     }
    
//     // Public : Element accesible de partout, sur le site ou application, et donc modifiable par l'utilisateur.
//     public function getAutonomie()
//     {
//         // la valeur $this equivaut a vitesseActuelle
//         return $this->autonomie;
//     }
//     // Un mutateur (setter) est une méthode qui permettra la modification d'un attribut, et uniquement cela (en d'autres termes, elle ne renvoie aucune information).Cette méthode porte par convention le préfixe set
//     public function setMarque($marque)
//     {
//         // la valeur $this anonce marque equivaut a $marque
//         $this->marque = $marque;
//     }
//     public function setModele($modele)
//     {
//         $this->modele = $modele;
//     }
//     public function accelerer($autonomie)
//     { //pour obtenir la vitesse d'acceleration, j'additionne la vitesse actuelle avec elle-même.
//         $this->autonomie += $autonomie;
//     }
// }