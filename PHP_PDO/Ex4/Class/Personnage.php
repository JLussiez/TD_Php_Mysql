<?php

class Personnage{

   private $_Pseudo;
   private $_Vie;

   public function _construct($_maVie,$_Pseudo){
      $this->_Pseudo = $_Pseudo;
      $this->_Vie =$_maVie;
}
   public function stats()
{
      echo "Je suis le personnage $this->_Pseudo et j'ai $this->_Vie points de vie.";
   }
}


?>