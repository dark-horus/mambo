<?php 
session_start();
if (!isset($_SESSION['id'])){
	header('location: index.php');
}
else {

//connexion à la bdd
include('bdd.php');

$password = $_SESSION['id'];

//Récupération des informations de l'utilisateur
$login = $bdd->query('SELECT * FROM `user` WHERE password = "'.$password.'"');
$res = $login->fetch();

//variables
$id = $res['iduser'];
$etape_ID = $_POST['etape_ID'];
$field = $_POST['field'];
$value = $_POST['value'];


$req = $bdd->prepare('INSERT INTO `etape` (user_ID, etape_ID, field, value) VALUES(:user_ID, :etape_ID, :field, :value)');
$req->execute(array(
	'user_ID' => $id,
	'etape_ID' => $etape_ID,
	'field' => $field,
	'value' => $value
	));
header('location: '.$etape_ID);


}
?>