<title>Exo 14 : Algo/php</title>

<h1><u>Exercice 14:</u></h1>
<p>
    Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec qui hérite
    (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).
    Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques suivantes :
    Peugeot 408 : $v1 = new Voiture("Peugeot","408");
    BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);
    Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :
    echo $v1->getInfos()."<br />";
    echo $ve1->getInfos()."<br />";

</p>

<?php
include('voiture2.php');

// $v1 = new Voiture("Peugeot", "408");
// $ve1 = new VoiturElec("BMW", "I3", 100);

// Raccord de la fonction acclerer a V1
$ve1->autonomie(100);


// echo de $v1 et $v2
echo $v1 . "<br>" . $ve1 . "<br>";
?>

<style>
    body {
        margin-left: 100px;
    }

    h1 {
        text-align: center;
    }
</style>