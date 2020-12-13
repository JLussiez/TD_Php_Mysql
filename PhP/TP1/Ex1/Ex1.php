<?php
echo('<link rel="stylesheet" href="php.css" type="text/css">'); 
    $NombreAleatoire = rand ( 0 , 100 );

        if($NombreAleatoire%2 == 1){
            echo('<div class="impair"> '.$NombreAleatoire.' est impair</div>');
           
        }
        else{
             echo('<div class="pair"> '.$NombreAleatoire.' est pair</div>');
        }
highlight_file(__FILE__);
?>