<title>Exo 12 : Algo/php</title>

<h1>Exercice 12</h1>
<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau contenant
    clé et valeur), <br>
    dire bonjour aux différentes personnes dans leur langue respective
    <br>
    (français ➔ « Salut », anglais ➔
    « Hello », espagnole ➔ « Hola »)
    Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG
    <br>
    Variante : trier d’abord le tableau par ordre alphabétique du prénom
</p>

<?php

$salut = [
    "Français" => "Salut",
    "Anglais" => "Hello",
    "Espagnole" => "Hola"
];

foreach ($salut as $langue => $variant) {

    echo "En $langue, on dit $variant.<br><br>";
}
?>
<br>
<?php
$salut2 = [
    "Français" => "Salut",
    "Anglais" => "Hello",
    "Espagnole" => "Hola"
];

ksort($salut2);
"<br>";
foreach ($salut2 as $langue2 => $variant2) {
    echo "En $langue2, on dit $variant2 <br><br>";
}
?>
<br>
<?php

$personnages = [
    "Mickaël" => "FRANCE",
    "Virgile" => "ESPAGNE",
    "Marie-Claire" => "ENGLETERRE"
];

foreach ($personnages as $perso => $pays) {

    echo "$perso habite en $pays.<br><br>";
}
?>
<br>
<?php
$personnages2 = [
    "Mikaël" => "FRANCE",
    "Virgile" => "ESPAGNE",
    "Marie-Claire" => "ENGLETERRE"
];

ksort($personnages2);
"<br>";
foreach ($personnages2 as $perso2 => $pays2) {
    echo "$perso2 habite en $pays2 <br><br>";
}
?>