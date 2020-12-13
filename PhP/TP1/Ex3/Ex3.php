<?php

$tableau = array(array('nom' => 'nom1','prenom' => 'prenom1','mdp' => 'mdp1'     ),array('nom' => 'nom2','prenom' => 'prenom2','mdp' => 'mdp2'     ),array('nom' => 'nom3','prenom' => 'prenom3','mdp' => 'mdp3'     ));
echo '<table border="1"><tr>';
foreach($tableau as $key => $value) {foreach($value as $valeur) {echo '<td>';echo $valeur;echo '</td>';    }}
echo '</table></tr>';

highlight_file(__FILE__);
