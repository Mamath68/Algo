<title>Livre POO</title>

<?
include "Livre.php";
include "Auteur.php";

$a1 = new Auteur("Stephen", "King");
$l1 = new Livre("ça", 1986, 1138, 20, $a1);
$l2 = new Livre("Simetierre", 1983, 374, 15, $a1);
$l3 = new Livre("Le fléau", 1978, 823, 14, $a1);
$l4 = new Livre("Shining", 1977, 447, 16, $a1);

echo $a1->afficherBibliographie();
?>

<style>
    h1 {
        text-align: center;
        padding : 1em 2em 0 0
    }

    p {
        font-size: 25px;
        text-align: center;
    }
</style>