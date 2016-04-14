<?php 

//connexion à la bdd
include('bdd.php');

//si l'utilisateur existe pas génération d'un ID

$characts    = 'abcdefghijklmnopqrstuvwxyz';
$characts   .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';	
$characts   .= '1234567890'; 
$idconnect      = ''; 
for($i=0;$i < 10;$i++)    //10 est le nombre de caractères
	{ 
        $idconnect .= substr($characts,rand()%(strlen($characts)),1); 
	}



//creation du compte dans la bdd
$bdd->exec('INSERT INTO `user` (password) VALUES("'.$idconnect.'")');

//Démarrage de la session de l'utilisateur
$login = $bdd->query('SELECT * FROM `user` WHERE password ="'.$idconnect.'"');
$res = $login->fetch();


if($res != NULL){
session_start();
$_SESSION['id'] = $res['password'];

}
header('location: noncode.php');



?>

