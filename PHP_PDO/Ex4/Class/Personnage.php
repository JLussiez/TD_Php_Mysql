<?php

class Personnage
{
    //Propriétés
        private $Pseudo;
        private $Vie;
        private $Attaque;
        private $Défense;

    //Méthodes
        public function _construct($pseudo)
        {
            $this->Pseudo = $pseudo;
            $this->Attaque = 50;
            $this->Vie = 100;
        }

        public function Attaquer($Ennemi)
        {
            echo "<p> $this->Pseudo :  Attaque de $this->Attaque pts </p>";
            $Ennemi->Defense($this->Attaque);
        }

        public function Defense($Attaque)
        {
            echo "<p> $this->Pseudo :  Reçoit $Attaque de dégats. </p>";
            $this->Vie -= $Attaque;
            echo "<p> Vie de $this->Pseudo : $this->Vie </p>";
        }
        
}
?>