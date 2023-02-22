<title>Exo 15 : Algo/php</title>

<h1><u>Exercice 15</u></h1>
<p>Créer une classe Personne (nom, prénom et date de naissance).
    Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
    <br>
    <code>$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
        <br>
    $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;</code>
</p>

<?php
include('personne.php');

$p1 = new Personne("DUPONT", "Michel","1980-02-19");
$p2 = new Personne("DUCHEMIN","Alice","1985-01-17");

echo $p1."<br>";
echo $p2."<br>";
?>

<style>
    body {
        margin-left: 100px;
    }

    h1 {
        text-align: center;
    }
</style>