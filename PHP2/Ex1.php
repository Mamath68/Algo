<title>Exo 1 : Algo/php</title>

<h1><u>Exercice 1:</u></h1>
<p>
    Créer une fonction personnalisée <code>convertirMajRouge()</code> permettant de transformer
    <br> une chaîne de
    <br>
    caractère passée en argument en majuscules et en rouge.
    <br><br>
    Vous devrez appeler la fonction comme suit: <code>convertirMajRouge($texte);</code>
    <?php
    $texte = "Mon texte en paramètre";
    echo $texte;
    echo functionMajRouge($texte);
    function functionMajRouge($texte)
    {
        echo "<br><p style ='color:red'>" . mb_strtoupper($texte) . "</p> <br>";
    }
    ?>

    <style>
        body {
            margin-left: 100px;
        }

        h1 {
            text-align: center;
        }
    </style>