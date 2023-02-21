<title>Exo 10 : Algo/php</title>";

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
$nomsRadio = array("Monsieur", "Madame", "Mademoiselle");
afficherRadio($nomsRadio);
function afficherRadio($nomsRadio)
{
    echo "<form>";
    foreach ($nomsRadio as $nomRadio) {
        echo "<input type='radio' name='radio'>$nomRadio<br>";
    }
    echo "</form>";
}
?>