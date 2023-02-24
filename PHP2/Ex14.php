<title>Exo 14 : Algo/php</title>

<h1><u>Exercice 14:</u></h1>
<p>
    Créer une classe Voiture possédant 2 propriétés <code>(marque et modèle)</code> ainsi qu’une classe
    <code>VoitureElec</code> qui hérite <code>(extends)</code>de la classe <code>Voiture</code> et qui a une propriété
    supplémentaire <code>(autonomie)</code>. <br>
    Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques suivantes : <br>
    <code>Peugeot 408 : $v1 = new Voiture("Peugeot","408") <br>
    BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",150) </code><br>
    Votre programme de test devra afficher les informations des 2 voitures de la façon suivante: <br>
    <code>echo $v1->getInfos().<br>
    echo $ve1->getInfos().</code>

</p>

<?php
include('voiture2.php');
// Nouvel objet dans la class voiture
$v1 = new Voiture("Peugeot", "408");
$ve1 = new VoitureElec("BMW", "I3", 150);

// echo de $v1 et $v2
echo $v1->getInfo() . "<br>";
echo $ve1->getinfo(). "<br>";
?>

<style>
    body {
        margin-left: 100px;
    }

    h1 {
        text-align: center;
    }

    .simov {
        width: 245px;
    }

    .aligne {
        display: flex;
        list-style: none;
    }

    form {
        display: flex;
    }
</style>