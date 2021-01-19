<?php

$BasePDO = new PDO("mysql:host=192.168.65.60; dbname=PHP_Objet_Exo5; charset=utf8", "root", "root");

class Personnage
{
    //Propriétés
        private $_Nom;
        private $_id;
        private $_BasePDO;
        private $_User;

    //Méthodes
        
        public function _construct($Id, $DB)
        {
            $this->_id = $Id;
            $this->_BasePDO = $DB;

            $this->_id = $this->$DB->query("SELECT * FROM Personnage WHERE id = '".$Id."'")->fetch();
        }

        public function stats()
        {
            echo "je suis ".$this->_User['Nom'];
        }
}
?>