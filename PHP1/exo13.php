<title>Exo 13 : Algo/php</title>

<h1>Exercice 13</h1>
<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle
    devra être affichée avec 2 décimales.</p>

<?php

$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$nbNotes = count($notes);
$sommeNotes = array_sum($notes);
$moyenne = round($sommeNotes / $nbNotes, 2);

echo "la moyenne est de : $moyenne";
