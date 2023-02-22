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

$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

date_default_timezone_set('Europe/Paris');
$today = date('Y-m-d');
$d1 = new DateTime($p1->getDateNaissance());
$d2 = new DateTime($today);
$diff = $d2->diff($d1);
$age = $diff->y;
date_default_timezone_set('Europe/Paris');
$today = date('Y-m-d');
$d1 = new DateTime($p2->getDateNaissance());
$d2 = new DateTime($today);
$diff = $d2->diff($d1);
$age2 = $diff->y;
echo "Je m'appel(le) " . $p1->getNom() . "  " . $p1->getPrenom() . " Et j'ai : " . $age . " ans<br>";
echo "Je m'appel(le) " . $p2->getNom() . "  " . $p2->getPrenom() . " Et j'ai : " . $age2 . " ans";
?>

<style>
    body {
        margin-left: 100px;
    }

    h1 {
        text-align: center;
    }
</style>