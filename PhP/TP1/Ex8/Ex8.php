<?php
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