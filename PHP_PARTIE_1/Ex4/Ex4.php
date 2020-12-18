<<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../style.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
    </body>
</html>
<?php
include '../../Menu.php';
menu ();
  function racines($a, $b, $c) {

    echo "Recherche des solutions de l'équation $a x² + $b x + $c<br>";

    $delta = $b*$b - (4 * $a * $c);

    if ($delta < 0)

      echo "Cette équation n'a pas de solution.";

    if ($delta == 0)

      echo "Cette équation a une racine double égale à ".-$b/(2*$a);

    if ($delta > 0){

      $racine1 = (-$b - sqrt($delta))/(2*$a);

      $racine2 = (-$b + sqrt($delta))/(2*$a);

      echo "Cette équation a deux racines : $racine1 et $racine2";

    }

  }

  racines(5, 8, 9);

  highlight_file(__FILE__);