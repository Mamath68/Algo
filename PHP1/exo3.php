<title>Exo 3 : Algo/php</title>

<h1>Exercice 3</h1>
<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot « aujourd’hui » par le mot
    « demain ». <br> Afficher l’ancienne et la nouvelle phrase.</p>

<?php
$phrase = "Notre formation DL commence aujourd'hui";
$nbcaracteres = strlen($phrase);
echo "Notre formation DL commence aujourd'hui.<br>";
echo str_replace("aujourd'hui", "demain", "Notre formation DL commence aujourd'hui");