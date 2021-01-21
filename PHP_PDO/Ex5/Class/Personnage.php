<?php

$MaBase = new PDO("mysql:host=192.168.65.60; dbname=PHP_Objet_Exo5; charset=utf8", "root", "root");

class Personnage
{

    public $basenom;

    //Méthodes
    public function _construct($id) 
    {
        $this->basenom = $MaBase->query("SELECT * FROM `Persos` WHERE `id` = $id")->fetch();
    
      }

      public function Personnage()
      {
        echo "Le personnage ".$this->basenom['nom'];
      }
    
    }

?>