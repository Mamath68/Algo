<title>Exo 8 : Algo/php</title>

<h1><u>Exercice 8:</u></h1>
<p>
    Soit l'URL suivante: <span>https://my.mobirise.com/data/userpic/764.jpg</span>
    <br>
    Créer une fonction personnalisée permettant d'afficher l'image N fois à l'écran.
    <br><br>
    <b>Exemple:</b>
    <br>
    <code>repeterImage($url,4);</code>
</p>

<?php
$url = "https://my.mobirise.com/data/userpic/764.jpg";
echo repeterImage($url, 4);
function repeterImage($url, $x)
{
    $a = 0;
    do {
        echo "<img src='$url' alt='image mobirise userpic'>";
        --$x;
    } while ($a < $x);
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