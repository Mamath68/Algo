<title>Exo 10 : Algo/php</title>

<h2>Exercice 10:</h2>
<p>
    En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire complet qui contient
    les informations suivantes : <br>
    champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix <br>
    parmi lesquels on pourra sélectionner un intitulé de formation : <br>
    « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
    Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation
    (<code>submit</code>).
</p>


<?php

$nomsInput = array("Nom", "Prénom", "Adresse E-mail", "Ville");
echo afficherInput($nomsInput);
function afficherInput($nomsInput)
{
    echo "<form class='form2'>";
    foreach ($nomsInput as $nom) {
        echo "<label for='$nom'>$nom</label><br><input type='text' id='$nom' name='$nom' value=''><br>";
    }
    echo "</form>";
}

$elements = array("Quel est votre genre ?", "Homme", "Femme", "Autre / Ne souhaite pas répondre");

alimenterListeDeroulante($elements);
function alimenterListeDeroulante($elements)
{
    echo "<form><select>";
    foreach ($elements as $el) {
        echo "<option value='$el'>$el</option>";
    }
    echo "<select></form>";
}

$nomsFormation = array("Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet");
afficherRadio($nomsFormation);
function afficherRadio($nomsFormation)
{
    echo "<form>";
    foreach ($nomsFormation as $nomFormation) {
        echo "<input type='radio' name='radio'>$nomFormation<br>";
    }
    echo "</form>";
}

echo "<input type='submit' value='Envoyer'>";

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
        padding: 1.2em;
        margin: 0;
    }

    .form2 {
        background-color: cadetblue;
        width: 210px;
        text-align: center;
        padding: 1.2em;
    }

    input[type=submit] {
        height: 70px;
        width: 249px;
        padding: 0;
        border: solid cadetblue;
        background-color: cadetblue;
        font-size: 1.5em;
        color: white;
        transition: 0.3s;
    }

    input[type=submit]:hover {
        color: white;
        background-color: blue;
    }
</style>