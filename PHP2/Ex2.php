<title>Exo 2 : Algo/php</title>

<h2><u>Exercice 2:</u></h2>
<p>
        Soit le tableau suivant:
        <br>
        <code>$capitales = array("France"=>"Paris", "Allemagne"=>"Berlin", "USA"=>"Washington", "Italie"=>"Rome");</code>
        <br>
        Réaliser un algorithme permettant d'afficher le tableau HTML suivant (notez que le nom du pays
        <br>
        s'affichera en majuscule et que le tableau est trié par ordre alphabétique<b>du nom de pays</b>grâce à
        <br>
        une fonction personnalisée.
    </p>
</p>

<?php
$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome"
];
echo afficherTableHTML($capitales);
function afficherTableHTML($capitales)
{
    ksort($capitales);
    echo "<table><tr><th>Pays</th><th>Capitale</th></tr>";
    foreach ($capitales as $pays => $capitale) {
        echo "<tr><td>" . strtoupper($pays) . "</td><td>" . $capitale . "</td></tr>";
    }
    // ferme la table
    echo "</table>";
}
?>
<style>
    body {
        margin-left: 100px;
    }

    h1 {
        text-align: center;
    }

    table,
    td,
    th {
        border: 1px solid;
    }

    table {
        border-collapse: collapse;
    }

    th {
        font-weight: bold;
    }
</style>
