<?php
session_start();
$_SESSION['nom'] = 0;
$_SESSION['age'] = 0;

echo('

<form action="FormulairePhP7.php" method="get">

 <p>Votre nom : <input type="text" name="nom" /></p>
 <p>Votre âge : <input type="text" name="age" /></p>

 <p><input type="submit" value="OK"></p>

</form> ');

highlight_file(__FILE__);
?>
