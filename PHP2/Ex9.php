<title>Exo 9 : Algo/php</title>";

<h1><u>Exercice 9:</u></h1>
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

<style>
    body {
        margin-left: 100px;
    }

    h1 {
        text-align: center;
    }

    form {
        background-color: cadetblue;
        width: 210px;
    }
</style>