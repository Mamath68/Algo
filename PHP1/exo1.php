<title>Exo 1 : Algo/php</title>";



<h1>Exercice 1</h1>
<p>Soit la phrase « Notre formation DL commence aujourd'hui ».
    Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase (espaces inclus).</p>

<?php
$phrase = "Notre formation DL commence aujourd'hui";
$nbcaracteres = strlen($phrase);
echo "Notre formation DL commence aujourd'hui.<br>";
echo "La phrases contient $nbcaracteres caractères.";