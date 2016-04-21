<?php 
// connection bdd
   // include('bdd.php');

try {
    $strConnection = 'mysql:host=localhost;dbname=mambo;'; //Ligne 1
    $arrExtraParam= array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"); //Ligne 2
    $pdo = new PDO($strConnection, 'root', '', $arrExtraParam); //Ligne 3; Instancie la connexions
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Ligne 4
}
catch(PDOException $e) {
    $msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
    die($msg);
}

$query = 'SELECT * FROM user;';
$arr = $pdo->query($query)->fetch();

?>
