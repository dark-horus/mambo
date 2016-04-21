<?php 

//connexion à la bdd
include('bdd.php');

//si l'utilisateur existe, comparaison formulaire et bdd
$ID = mysql_real_escape_string($_POST['ID']);
$password = mysql_real_escape_string($_POST['password']);

$password = MD5($password);
echo $password;
$login = $bdd->query('SELECT * FROM `admin` WHERE login = "'.$ID.'" AND password = "'.$password.'"');
$res = $login->fetch();



//Démarrage de la session de l'utilisateur
if($res != NULL){
	
	session_start();
	$_SESSION['autorize'] = "allowedtoconnect";
	
	//redirection
	
	header('location: index.php');

}

else {
	header('location: login.php');
}


?>

