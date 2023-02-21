<title>Exo 5 : Algo/php</title>

<h1><u>Exercice 5:</u></h1>
<p>
    Créer une fonction personnalisée permettant de créer un formullaire de champs de texte en
    <br>
    précisant le nom des champs associés.
    <br><br>
    <b>Exemple:</b>
    <br>
    <code>$nomsInput = array("Nom", "Prénom", "Ville");<br>afficherInput($nomsInput);</code>
</p>

<?php
$nomsInput = array("Nom", "Prénom", "Ville");
echo afficherInput($nomsInput);
function afficherInput($nomsInput)
{
    echo "<form><fieldset>";
    foreach ($nomsInput as $nom) {
        echo "<label for='$nom'>$nom</label><br><input type='text' id='$nom' name='$nom' value=''><br>";
    }
    echo "</fieldset></form>";
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