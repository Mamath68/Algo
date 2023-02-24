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
// Nouvel objet dans la class voiture
$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "C4", 3, true);

echo $v1->demarrer() . "<br>";
echo $v1->accelerer(50) . "<br><br>";
// // Raccord de la fonction demarrer a $V1
$v1->demarrer();
// Raccord de la fonction acclerer a $V1
$v1->accelerer(0) . "<br>";
// Raccord de la fonction stop a $V2
$v2->stop();
// echo de $v1 et $v2
echo "Infos Véhicule 1<br>**************<br>" .$v1 . "<br>";
echo "Infos Véhicule 2<br>**************<br>" .$v2 . "<br>";
echo $v2->demarrer() . "<br>";
echo $v2->stop() . "<br>";
echo $v2->accelerer(20) . "<br>";
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