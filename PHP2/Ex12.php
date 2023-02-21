<title>Exo 12 : Algo/php</title>

<h1><u>Exercice 12:</u></h1>
    <p>
        La fonction <code>var_dump ($variable)</code> permet d'afficher les informations d'une variable. <br>
        Soit le tableau suivant:
        <br>
        <code>$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));</code>
        <br>
        A l'aide d'une boucle, afficher les informations des variables contenues dans le tableau.
        <br>

    </p>

    <?php
    $tableauValeurs = array(true, "texte", 10, 25.369, array("valeur1", "valeur2"));
    foreach ($tableauValeurs as $affiche) {
        echo var_dump($affiche) . "<br>";
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

        form {
            background-color: cadetblue;
            width: 210px;
        }
    </style>
</body>

</html>