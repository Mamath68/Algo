<title>Exo 4 : Algo/php</title>

<h2><u>Exercice 4:</u></h2>
<p>
    A partir de l'exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra
    <br>
    le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s'ouvrir dans un
    <br>
    nouvel onglet et le tableau sera trié par ordre alphabétique <b>de la capitale</b>).
    <br><br>
    On admet que l'URL de la page Wikipédia de la capitale adopte la forme:
    <span>https://fr.wikipédia.org/wiki/</span>
    <br><br>
    Le tableau passé en argument sera le suivant:
    <br>
    <code>$capitales = array("France"=>"Paris", "Allemagne"=>"Berlin", "USA"=>"Washington", "Italie"=>"Rome", "Espagne"=>"Madrid");</code>
</p>

<?php
$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington (district de Columbia)",
    "Italie" => "Rome",
    "Espagne" => "Madrid"
];

ksort($capitales);
echo "<table><tr><th>Pays</th><th>Capitale</th><th>Lien wiki</th></tr>";
foreach ($capitales as $pays => $capitale) {
    echo "<tr><td>" . strtoupper($pays) . "</td><td>" . $capitale . "</td><td><a href='https://fr.wikipedia.org/wiki/$capitale' target='_blank'>Lien</a></td></tr>";
}
// ferme la table
echo "</table>";
?>
<style>
    body {
        margin-left: 100px;
    }

    h1 {
        text-align: center;
    }

    span {
        color: olive;
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