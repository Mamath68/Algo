<title>Exo 4 : Algo/php</title>

<h1>Exercice 4</h1>
<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<?php

$palin = "engage le jeu que je le gagne";
function Palindrome($palin)
{
    // suppression des espaces     
    $palin = str_replace(' ', '', $palin);
    if ((strlen($palin) == 1) || (strlen($palin) == 0)) {
        echo "Cette phrase est un Palindrome";
    } else {
        if (substr($palin, 0, 1) == substr($palin, (strlen($palin) - 1), 1)) {
            return Palindrome(substr($palin, 1, strlen($palin) - 2));
        } else {
            echo "Cette phrase n'est pas un palindrome !";
        }
    }
}
echo "Phrase: $palin </br>";
echo "Phrase inversé : ". strrev($palin);
?>
<br>
<?php
Palindrome($palin);