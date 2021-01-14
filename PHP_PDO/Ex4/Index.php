<?php
include 'Class/Personnage.php';

   $Personnage1 = new Personnage();
   $Personnage1->_construct('Personnage1');

   $Personnage2 = new Personnage();
   $Personnage2->_construct('Personnage2');

   $Personnage1->Attaquer($Personnage2);
?>