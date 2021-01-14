<?php

$BasePDO = new PDO("mysql:host=192.168.65.60; dbname=PDOExo; charset=utf8", "root", "root");

class Personnage
{
    //Propriétés
        private $_Pseudo;
        private $_Vie;
        private $_Attaque;
        private $_Défense;
        private $_Perso_Id;
        private $_BasePDO;
        private $_User;

    //Méthodes
        
        public function _construct($Id, $DB)
        {
            $this->_Perso_Id = $Id;
            $this->_BasePDO = $DB;

            $this->_Perso_Id = $this->$DB->query("SELECT * FROM Personnage WHERE Perso_Id = '".$Id."'")->fetch();
        }

        public function stats()
        {
            echo "je suis ".$this->_User['Perso_Nom']." et j'ai " .$this->_User['Perso_Vie']. " et ".$this->_User['Perso_Attaque']. " et ".$this->_User['Perso_Défense'];
        }
}
?>