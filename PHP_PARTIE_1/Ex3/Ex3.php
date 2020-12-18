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
$tableau = array(array('nom' => 'nom1','prenom' => 'prenom1','mdp' => 'mdp1'     ),array('nom' => 'nom2','prenom' => 'prenom2','mdp' => 'mdp2'     ),array('nom' => 'nom3','prenom' => 'prenom3','mdp' => 'mdp3'     ));
echo '<table border="1"><tr>';
foreach($tableau as $key => $value) {foreach($value as $valeur) {echo '<td>';echo $valeur;echo '</td>';    }}
echo '</table></tr>';

highlight_file(__FILE__);
