<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
        session_start();
    ?>
        <?php
            
            if(isset($_SESSION['log']) && $_SESSION['log'])
            {
                
                echo "<h1>Bienvenue " .$_SESSION['Login']. "</h1>
                    <form action='' method='post'>
                        <div>
                            <button type='submit' name='Logout'>Se déconnecter</button>
                        </div>
                    </form>";
                if(isset($_POST['Logout']))
                {
                    session_destroy();
                    header("refresh:0");
                }
            
            }
            else{
                echo"<form action='' method='post'>
                        <div>
                            <label for='Login'>Login : </label>
                            <input type='text' name='Login' id='Login'>
                        </div>
                        <div>
                            <label for='MDP'>Mot de passe : </label>
                            <input type='password' name='MDP' id='MDP'>
                        </div>
                        <div>
                            <button type='submit' name='LoginButton'>Se connecter</button>
                        </div>
                    </form>";
            

                if (isset($_POST['LoginButton'])) {
                    if($_POST['Login'] =='Julien'){
                        $_SESSION['Login']=$_POST['Login'];
                        if($_POST['MDP']=='1234'){
                            $_SESSION['MDP']=$_POST['MDP'];
                            $_SESSION['log']= true;
                            header("refresh:0");
                        }else{
                            echo"Mot de passe inconnu";
                        }
                    }else{
                        echo"Login inconnu";
                    }
                }
            }
            highlight_file(__FILE__);
        ?>

</body>

</html>