<title>Exo 9 : Algo/php</title>";

<h2>Exercice 9:</h2>
<p>
    Créer une fonction personnalisée permettant d'afficher des boutons radio avec un tableau de valeurs en paramètre
    ("Monsieur", "Madame", "Mademoiselle").
    <br><br>
    <b>Exemple:</b>
    <br>
    <code>afficherRadio($nomsRadio);</code>
</p>

<?php
$nomsRadio = array("Monsieur", "Madame", "Mademoiselle");
afficherRadio($nomsRadio);
function afficherRadio($nomsRadio)
{
    echo "<form>";
    foreach ($nomsRadio as $nomRadio) {
        echo "<input type='radio' name='radio'>$nomRadio<br>";
    }
    echo "</form>";
}
?>