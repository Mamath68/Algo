<title>Exo 13 : Algo/php</title>

<h1><u>Exercice 13:</u></h1>
<p>
    Créer une classe <code> Voiture </code>possédant les propriétés suivantes : <br>
    <code> marque, modèle, nbPortes et vitesseActuelle </code> ainsi que les méthodes
    <code>demarrer( ), accelerer( ) et stopper( )</code> en plus des <code>accesseurs(get)</code>
    et <code>  mutateurs(set) </code> traditionnels.
    <br>
    La vitesse initiale de chaque véhicule instancié est de 0. Une méthode personnalisée pourra afficher toutes les
    informations d’un véhicule.
    <br>
    <code>  v1 ➔ "Peugeot","408",5 <br>
            v2 ➔ "Citroën","C4",3</code>
    <br>
    Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de tests pour
    vérifier la cohérence de la classe <code>Voiture</code> .
    <br> Vous devez afficher les tests et les éléments suivants :
</p>
<figure>
    <nav class="aligne">
        <li><img class="simov aligne" src="img/voit1.jpg" alt="Voit1"></li>
        <li><img class="simov aligne" src="img/voit2.jpg" alt="Voit2"></li>
        <li><img class="simov aligne" src="img/voit3.jpg" alt="Voit3"></li>
    </nav>
</figure>

<?php
include('voiture.php');

$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "C4", 3);
$v1->accelerer(50);

echo $v1 . "<br>" . $v2 . "<br>";
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