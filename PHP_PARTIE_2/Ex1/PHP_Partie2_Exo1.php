<?php
include '../../Menu.php';
menu ();
?>
<!DOCTYPE php>
    <html>
        <head>
            <title>TP2 - Exo 1</title>
            <link rel="stylesheet" href="../../style.css">
        </head>

        <body>
<?php include('table.php'); ?>
        </body>
<style>

    table{
        border: solid black 1px;
        margin: 5%;
    }
    table td{
        border: solid blue 1px;
    }

</style>

    </html>
    <?php
highlight_file(__FILE__); 

?>