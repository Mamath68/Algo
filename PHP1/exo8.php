<title>Exo 8 : Algo/php</title>

<h1>Exercice 8</h1>
<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme : <br>
    Affichage
    (pour la table de 8) : <br>
    Table de 8 : <br>
    1 x 8 = 8 <br>
    2 x 8 = 16 <br>
    3 x 8 = 24 … <br>
    Remarque : proposer 2 solutions avec 2 types de boucles.</p>


<?php
if (isset($_POST['nombre'])) {
    for ($i = 1; $i <= 10; $i++) {
        echo $i . " X " . $_POST['nombre'] . " = " . $i * $_POST['nombre'] . "<br />";
    }
}

?>
<br />
<form method="post">
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo '<button name="nombre" value="' . $i . '">' . $i . '</button>';
    }
    ?>
</form>