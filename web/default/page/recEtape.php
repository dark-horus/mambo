<?php 
session_start();
if (!isset($_SESSION['id'])){
	header('location: ../../index.php');
}
else {
	//Verification que l'étape est validée
$validate = $_POST['validate'];
$etape_ID = $_POST['etape'];
$password = $_SESSION['id'];
	if($validate == "false") {
		header('location: ../../'.$etape_ID.'/index.php');
	}
	else {
		
	
//connexion à la bdd
include('bdd.php');



//Récupération des informations de l'utilisateur
$login = $bdd->query('SELECT * FROM `user` WHERE password = "'.$password.'"');
$res = $login->fetch();

//variables
$id = $res['iduser'];


//si y a des champs à remplir
		if (isset($_POST['field']) && isset($_POST['value'])){
			$field = mysql_real_escape_string($_POST['field']);
			$value = mysql_real_escape_string($_POST['value']);
		}

	

$req = $bdd->prepare('INSERT INTO `etape` (user_ID, etape_ID, field, value) VALUES(:user_ID, :etape_ID, :field, :value)');
$req->execute(array(
	'user_ID' => $id,
	'etape_ID' => $etape_ID,
	'field' => $field,
	'value' => $value
	));
	//Etape en cours :
$req2 = "UPDATE `user` SET current_etape = '$etape_ID' WHERE iduser = '$id'";
$req2 = $bdd->exec($req2);

//comptabilise pour la progression

$requete = $bdd->query('SELECT etape_ID FROM `etape` WHERE user_ID = "'.$id.'" GROUP BY etape_ID');
$progression = 0;
while($donnees = $requete->fetch())
{
	$progression = $progression+1;
}

$req3 = "UPDATE `user` SET progression = '$progression' WHERE iduser = '$id'";
$req3 = $bdd->exec($req3);


	
	
//redirection
header('location: ../../'.$etape_ID.'/index.php');


}
}
?>