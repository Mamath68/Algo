<title>Exo 11 : Algo/php</title>

<h1>Exercice 11</h1>
<p>Initialiser un tableau de x marques de voitures.
    <br>
    Ecrire un algorithme permettant de parcourir ce tableau et d’en
    afficher le contenu (une marque de voiture par ligne).
    <br>
    Il est également demandé d’afficher le nombre de marques de
    voitures présentes dans le tableau. <br>
    Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »
</p>

<?php


$marques = ["Peugeot", "Renault", "BMW", "Mercedes"];
$nbMarques = count($marques);

for ($i = 0; $i < $nbMarques; $i++) {
    echo $marques[$i] . "<br>";
}


