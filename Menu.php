<?php
function menu()
{
    
    ?>
    <!-- debut du menu-->
    <nav>
           
        <ul>  
            <li><a href="">HTML</a>
            <ul class="chapitre1">
                <li><a onclick="menu(this);" data-href="HTML/Exo1.php">exo_1</a></li>
                <li><a onclick="menu(this);" data-href="HTML/Exo2.php">exo_2</a></li>
                <li><a onclick="menu(this);" data-href="HTML/Exo3.php">exo_3</a></li>
                <li><a onclick="menu(this);" data-href="HTML/Exo4.php">formulaire</a></li>
                <li><a onclick="menu(this);" data-href="HTML/Exo5.php">index_html</a></li>
            </ul>

            <li><a href="">CSS</a>
            <ul class="chapitre1">
                <li><a onclick="menu(this);" data-href="CSS/Exo1.php">exo_1</a></li>
                <li><a onclick="menu(this);" data-href="CSS/Exo2.php">exo_2</a></li>
                <li><a onclick="menu(this);" data-href="CSS/Exo3.php">exo_3</a></li>
                <li><a onclick="menu(this);" data-href="CSS/Exo4.php">exo_4</a></li>
            </ul>

            <li><a href="">Chapitre 1</a>
            <ul class="chapitre1">
                <li><a onclick="menu(this);" data-href="PHP_PARTIE_1/Ex1/Ex1.php">exo_1</a></li>
                <li><a onclick="menu(this);" data-href="PHP_PARTIE_1/Ex2/Ex2.1.php">exo_2</a></li>
                <li><a onclick="menu(this);" data-href="PHP_PARTIE_1/Ex2/Ex2.2.php">exo_3</a></li>
                <li><a onclick="menu(this);" data-href="PHP_PARTIE_1/Ex3/Ex3.php">exo_4</a></li>
                <li><a onclick="menu(this);" data-href="PHP_PARTIE_1/Ex4/Ex4.php">exo_5</a></li>
                <li><a onclick="menu(this);" data-href="PHP_PARTIE_1/Ex5/Ex5.php">exo_6</a></li>
                <li><a onclick="menu(this);" data-href="PHP_PARTIE_1/Ex6/Ex6.php">exo_7</a></li>
                <li><a onclick="menu(this);" data-href="PHP_PARTIE_1/Ex7/Ex7.php">exo_8</a></li>
                <li><a onclick="menu(this);" data-href="PHP_PARTIE_1/Ex8/Ex8.php">exo_8</a></li>
                <li><a onclick="menu(this);" data-href="PHP_PARTIE_1/ExFinal/ExFinal.php">exo_final</a></li>
            </ul>

            <li><a href="">Chapitre 2</a>
            <ul class="chapitre1">
                <li><a onclick="menu(this);" data-href="PHP_PARTIE_2/Ex1/PHP_Partie2_Exo1.php">exo_1</a></li>
                <li><a onclick="menu(this);" data-href="PHP_PARTIE_2/Ex2/PHP_Partie2_Exo2.php">exo_2</a></li>
                <li><a onclick="menu(this);" data-href="PHP_PARTIE_2/Ex3/PHP_Partie2_Exo3.php">exo_3</a></li>
                <li><a onclick="menu(this);" data-href="PHP_PARTIE_2/ExFinal/PHP_Partie2_ExoFinal.php">exo_final</a></li>
            </ul>

            <li><a href="">BDD_TD1</a>
            <ul class="chapitre1">
                <li><a onclick="menu(this);" data-href="BDD_TD1/BDD_TD1_Exo1.php">exo_1</a></li>
                <li><a onclick="menu(this);" data-href="BDD_TD1/BDD_TD1_Exo2.php">exo_2</a></li>
                <li><a onclick="menu(this);" data-href="BDD_TD1/BDD_TD1_Exo3.php">exo_3</a></li>
                <li><a onclick="menu(this);" data-href="BDD_TD1/BDD_TD1_Exo4.php">exo_4</a></li>
                <li><a onclick="menu(this);" data-href="BDD_TD1/BDD_TD1_Exo5.php">exo_5</a></li>
                <li><a onclick="menu(this);" data-href="BDD_TD1/BDD_TD1_Exo6.php">exo_6</a></li>
                <li><a onclick="menu(this);" data-href="BDD_TD1/BDD_TD1_Exo7.php">exo_7</a></li>
            </ul>

            <li><a href="">BDD_TD2</a>
            <ul class="chapitre1">
                <li><a onclick="menu(this);" data-href="BDD_TD2/BDD_TD2_Exo1.php">exo_1</a></li>
                <li><a onclick="menu(this);" data-href="BDD_TD2/BDD_TD2_Exo2.php">exo_2</a></li>
                <li><a onclick="menu(this);" data-href="BDD_TD2/BDD_TD2_Exo3.php">exo_3</a></li>
            </ul>

            <li><a href="">BDD_TD3</a>
            <ul class="chapitre1">
                <li><a onclick="menu(this);" data-href="SQL_TD_3_4/SQL_TD3_Exo2.php">exo_2</a></li>
            </ul>

            <li><a href="">TD_4_BDD</a>
            <ul class="chapitre1">
                <li><a onclick="menu(this);" data-href="SQL_TD_3_4/SQL_TD4_Exo1.php">exo_1</a></li>
                <li><a onclick="menu(this);" data-href="SQL_TD_3_4/SQL_TD4_Exo2.php">exo_2</a></li>
                <li><a onclick="menu(this);" data-href="SQL_TD_3_4/SQL_TD4_Exo3.php">exo_3</a></li>
            </ul>
            <li style="float:right"><a class="active" href="../index.php">accueil</a></li>
        </ul>
    </nav>

    <!-- fin du menu-->

    <script type="text/javascript">

function menu(identifier){
      const origine = "php",
            current = window.location.href.split("/");

      current.splice (
            current.indexOf(origine)+1,
            current.length
      )

      window.location.assign(
            current.join("/") +"/"+ identifier.dataset.href
      );
      
}

</script>

    <?php
}
?>