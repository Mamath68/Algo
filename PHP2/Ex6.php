<title>Exo 6 : Algo/php</title>

<h1><u>Exercice 6:</u></h1>
<p>
    Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
    <br>
    de valeurs.
    <br><br>
    <b>Exemple:</b>
    <br>
    <code>$elements = array("Monsieur", "Madame", "Mademoiselle");<br>alimenterListeDeroulante($elements);</code>
</p>

<?php
$elements = array("Monsieur", "Madame", "Mademoiselle");
alimenterListeDeroulante($elements);
function alimenterListeDeroulante($elements)
{
    echo "<form><fieldset><select>";
    foreach ($elements as $el) {
        echo "<option value='$el'>$el</option>";
    }
    echo "<select></fieldset></form>";
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