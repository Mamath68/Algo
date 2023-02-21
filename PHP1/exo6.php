<title>Exo 6 : Algo/php</title>

<h1>Exercice 6</h1>
<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, son
    prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>

<?php

$nbArticles = 5;
$prixHT = 9.99 ;
$totalHT = $nbArticles * $prixHT;
echo "Le Total HT est de $totalHT € <br>";

$tauxTVA = 0.20;

$totalTTC = $nbArticles * $prixHT* (1 + $tauxTVA);
echo "Le total TTC est de $totalTTC";