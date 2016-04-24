<?php 

//connexion à la bdd
include('bdd.php');

//si l'utilisateur existe, comparaison formulaire et bdd

$password = mysql_real_escape_string($_POST['password']);



$login = $bdd->query('SELECT * FROM `user` WHERE password = "'.$password.'"');
$res = $login->fetch();


//Démarrage de la session de l'utilisateur
if($res != NULL){
	
	session_start();
	$_SESSION['id'] = $res['password'];
	//redirection
	header('location: /index.php');
}
else {
	header('location: ouicode.php');
}


?>

