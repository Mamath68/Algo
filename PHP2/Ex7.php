<title>Exo 7 : Algo/php</title>

<h1><u>Exercice 7:</u></h1>
<p>
    Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
    <br>
    dans le tableau associatif si la case est cochée ou non.
    <br><br>
    <b>Exemple:</b>
    <br>
    <code>genererCheckbox($elements);</code>
    <br>
    <span>//où $elements est un tableau associatif clé => valeur avec 3 entrées.</spsan>
</p>

<?php
$elements = array("Choix 1" => false, "Choix 2" => false, "Choix 3" => false);
genererCheckbox($elements);
function genererCheckbox($elements)
{
    echo "<form><fieldset>";
    foreach ($elements as $el => $e) {
        echo "<input type='checkbox' name='checkbox'>" . $el . "<br>";
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