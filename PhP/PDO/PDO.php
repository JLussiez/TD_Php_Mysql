<?php echo "Bonjour, "; 


try{ 

    $Base = new PDO('mysql:host=192.168.65.60; dbname=TP2Exo2_Julien; charset=utf8','TestPDO', 'PDO');
    echo "je suis connecté";

    $ResultatDeRequeteBrut = $Base->query("SELECT * FROM `Patient`");
    echo " et j'ai fait une requête pour avoir les ".$ResultatDeRequeteBrut->rowCount()." Patients.","<br>";

    while($TableauDunTuple = $ResultatDeRequeteBrut->fetch()){
        echo $TableauDunTuple["Num_SS"]." ".$TableauDunTuple["Nom"]."<br>";
    };


}catch(Exception $e){

    echo "J'ai eu un problème".$e->getMessage();
   }
    ?>

    <form action="" method="post">
        Login <input type="text" name="Nom">
        MotDePasse <input type="text" name="Password">
        <input type="submit" value="submit">
    </form>


<?php
highlight_file(__FILE__);
?> 