<title>Exo 2 : Algo/php</title>

<h1>Exercice 2</h1>
<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots contenus dans
    celle-ci.</p>

<?php
$phrase = "Notre formation DL commence aujourd'hui";
$nbmots = str_word_count($phrase);
echo "Notre formation DL commence aujourd'hui.<br>";
echo "La phrases contient $nbmots mots.";