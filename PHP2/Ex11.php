<title>Exo 11 : Algo/php</title>

<h1><u>Exercice 11:</u></h1>
<p>
    Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de
    caractère représentant une date. <br>
    Exemple :
    <br>
    (<code>formaterDateFr("2018-02-23");</code>). <br>
    Affichage:
    <br>
    vendredi 23 février 2018
    <br>
</p>


<?php
$jourj = date_default_timezone_get();

formaterDateFr($jourj);

function formaterDateFr($jourj)
{
    $date = date_create($jourj);
    $a = date_format($date, "l"); 
    $b = date_format($date, "d"); 
    $c = date_format($date, "m"); 
    $d = date_format($date, "Y"); 

    echo "<br>"."Nous sommes le : ";"<br>";
    switch ($a) {
        case "Monday":
            echo "lundi";
            break;
        case "Tuesday":
            echo "mardi";
            break;
        case "Wednesday":
            echo "mercredi";
            break;
        case "Thursday":
            echo "jeudi";
            break;
        case "Friday":
            echo "vendredi";
            break;
        case "Saturday":
            echo "samedi";
            break;
        case "Sunday":
            echo "dimanche";
            break;
        default:
            return "Week-End";
    }

    echo " " . $b . " ";

    switch ($c) {
        case "01":
            echo "janvier";
            break;
        case "02":
            echo "février";
            break;
        case "03":
            echo "mars";
            break;
        case "04":
            echo "avril";
            break;
        case "05":
            echo "mai";
            break;
        case "06":
            echo "juin";
            break;
        case "07":
            echo "juillet";
            break;
        case "08":
            echo "août";
            break;
        case "09":
            echo "septembre";
            break;
        case "10":
            echo "octobre";
            break;
        case "11":
            echo "novembre";
            break;
        case "12":
            echo "décembre";
            break;
        default:
            return "Moon";
    }

    echo " " . $d;
}
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

</style>