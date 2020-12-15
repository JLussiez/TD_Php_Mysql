<?php include "Formulaire.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div>
        <h1>Exercice :</h1>
        <?php
            if(form("1234","azerty")=="ok")
            {
                echo"Bienvenue";
                ?><div><a href="">Lien secret</a></div><?php
            }else{
                echo"Mot de passe incorrect";
            }
        ?>
    </div>
    <div>
        <h1>Code Ex final :</h1>
        <?php highlight_file(__FILE__); ?>
        <h1>Code formulaire :</h1>
        <?php highlight_file("Formulaire.php"); ?>
    </div>
</body>
</html>