<?php
include("Menu.php");
?>
<form action="Formulaire.php" method="post">

 <p>Votre nom : <input type="text" name="nom" /></p>
 <p>Votre âge : <input type="text" name="age" /></p>

 <p><input type="submit" value="OK"></p>

</form>

<?php

highlight_file(__FILE__);