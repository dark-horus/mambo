<?php 
session_start();

	//r�cup�re l'url
	if(isset($_GET['etape'])){
		$kelPage = $_GET['etape'];
		if($kelPage != "hotel" || $kelPage != "ferrari" || $kelPage != "poitrine" || $kelPage != "ordinateur" || $kelPage != "ours"){
			header('location: ../../403.php');
		}
		if (!isset($_SESSION['id'])){
			header('location: ../../'.$kelPage);
		}
		$validate = "true";
		$etape_ID = $kelPage;
		$password = $_SESSION['id'];
	}
	else{
		if (!isset($_SESSION['id'])){
			header('location: http://mambocanaille.fr');
		}
	
		else{
			$validate = $_POST['validate'];
			$etape_ID = $_POST['etape'];
			$password = $_SESSION['id'];
		}
	}
	//Verification que l'�tape est valid�e
	if($validate == "false") {
		header('location: ../../'.$etape_ID.'/index.php');
	}
	else {
		
	
//connexion � la bdd
include('bdd.php');


//R�cup�ration des informations de l'utilisateur
$login = $bdd->query('SELECT * FROM `user` WHERE password = "'.$password.'"');
$res = $login->fetch();

//variables
$id = $res['iduser'];


//si y a des champs � remplir
		if (isset($_POST['field']) && isset($_POST['value'])){
			$field = mysql_real_escape_string($_POST['field']);
			$value = mysql_real_escape_string($_POST['value']);
		}
		else {
			$field = '';
			$value = '';
		}

	
//insertion dans la bdd
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
if($dossier != "gaspacho"){
	header('location: ../../'.$etape_ID.'/index.php');
}
	
}
	
?>