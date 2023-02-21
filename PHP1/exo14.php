<title>Exo 14 : Algo/php</title>

<h1>Exercice 14</h1>
<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>


<?php
     $bday = new DateTime('12.02.1998');//dd.mm.yyyy
     $today = new DateTime('17:02:23'); // date actuel
     $diff = $today->diff($bday);
     echo"Vous avez $diff->y ans, $diff->m mois, $diff->d jours";
    ?>
