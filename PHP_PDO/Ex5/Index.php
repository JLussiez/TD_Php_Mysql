<?php

$BasePDO = new PDO('mysql:host=192.168.65.60;dbname=PHP_Objet_Exo5', 'root', 'root');

include 'Class/Personnage.php';

$User1 = new Personnage(1, $DB);

$User1->stats();

?>