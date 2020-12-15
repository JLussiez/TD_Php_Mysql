<?php session_start();

$_SESSION['nom'] = $_GET['nom'];
$_SESSION['age'] = $_GET['age'];

echo $_SESSION['nom'];
echo $_SESSION['age'];

highlight_file(__FILE__);