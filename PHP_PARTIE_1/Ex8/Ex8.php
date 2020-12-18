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
session_start();
$_SESSION['nom'] = 0;
$_SESSION['age'] = 0;

echo('

<form action="Formulaire.php" method="get">

 <p>Votre nom : <input type="text" name="login" /></p>
 <p>Votre âge : <input type="text" name="mdp" /></p>

</form> ');

echo (' <form action=session_unset ( ) : bool;><p><input type="submit" value="Reset"></p>');

session_unset(); 


highlight_file(__FILE__);