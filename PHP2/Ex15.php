<title>Exo 15 : Algo/php</title>

<h1><u>Exercice 15:</u></h1>
<p>
    En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une adresse e-mail a le
    bon format. Affichage
    L’adresse elan@elan-formation.fr est une adresse e-mail valide
    L’adresse contact@elan est une adresse e-mail invalide

</p>

<?php
bonFormat("elan@elan-formation.fr");
bonFormat("contact@elan");
function bonFormat($adresse)
{
    if (filter_var($adresse, FILTER_VALIDATE_EMAIL) === false) {
        echo "L'adresse " . $adresse . " est une adresse e-mail invalide<br>";
    } else {
        echo "L'adresse " . $adresse . " est une adresse e-mail valide<br>";
    }
}