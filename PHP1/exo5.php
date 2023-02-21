<title>Exo 5 : Algo/php</title>

<h1>Exercice 5</h1>
<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
    Attention, la valeur générée devra être arrondie à 2 décimales.</p>


<?php

$francsval = 6.55957;
$francs = 100;

echo "montant en francs = " . $francs . " FRF - ";
echo "En Euros, cela nous donne : " . round($francs / $francsval, 2) . "€";