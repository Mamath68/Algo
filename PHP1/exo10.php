<title>Exo 10 : Algo/php</title>

<h1>Exercice 10</h1>
<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un
    utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1 €.</p>
<!-- Montant à payer : 152 €
Montant versé : 200 €
Reste à payer : 48 €
***************************************************
Rendue de monnaie :
4 billets de 10 € - 1 billet de 5 € - 1 pièce de 2 € - 1 pièce de 1 € -->

<?php

$reste = 0;
$pay = 200;
$doit = 152;
$billet10 = 0;
$billet5 = 0;
$piece2 = 0;
$piece1 = 0;
$rest = $pay-$doit;

while ($rest >= 10) {
    $rest -= 10;
    $billet10++;
}
while ($rest >= 5) {
    $rest -= 5;
    $billet5++;
}
while ($rest >= 2) {
    $rest -= 2;
    $piece2++;
}
while ($rest >= 1) {
    $rest -= 1;
    $piece1++;
}
echo "rendu de monnaie : $billet10 billets, $billet5 billets, $piece2 pièces, $piece1 pièces";