<title>Exo 7 : Algo/php</title>

<h1>Exercice 7</h1>
<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
<ul>
    <li>Poussin : entre 6 et 7 ans</li>
    <li>Pupille : entre 8 et 9 ans</li>
    <li>Minime : entre 10 et 11 ans</li>
    <li>Cadet : à partir de 12 ans</li>
</ul>

Si la catégorie n’est pas gérée, merci de le préciser.</p>

<?php


$prenom = "Yaël";
$age = 7;

if ($age >= 6 && $age <= 7) {
    $resultat = "Poussin";
} else
    if ($age >= 8 && $age <= 9) {
        $resultat = "Pupille";
    } else
        if ($age >= 10 && $age <= 11) {
            $resultat = "Minime";
        } else
            if ($age >= 12) {
                $resultat = "Cadet";
            } else {
                $resultat = "qui n'est pas gérée";
            }
echo "<h2>$prenom qui as $age ans est dans la catégorie $resultat<h2>";