<?php
session_start();
$password = $_SESSION['id'];
include('../default/page/bdd.php');
//Récupération des informations de l'utilisateur
$login = $bdd->query('SELECT * FROM `user` WHERE password = "'.$password.'"');
$res = $login->fetch();

$id = $res['iduser'];

//Définir une taille maximale pour l'image à upload
$maxsize = 2097152; //2MO
//$maxwidth = 888888888;
//$maxheight = 88888888;


//tableau de variables
$_FILES['avatar']['name'];     //Le nom original du fichier, comme sur le disque du visiteur (exemple : mon_icone.png).
$_FILES['avatar']['size'];   //La taille du fichier en octets.
$tmp = $_FILES['avatar']['tmp_name']; //L'adresse vers le fichier uploadé dans le répertoire temporaire.
$_FILES['avatar']['error'];    //Le code d'erreur, qui permet de savoir si le fichier a bien été uploadé.
$folder = 'avatar/';
    
$erreur = "";

if ($_FILES['avatar']['error'] > 0){
	;
	switch ($_FILES['avatar']['error']){
		case "4" : $erreur = "fichier manquant";
		break;
		case "1" : $erreur = "fichier dépassant la taille maximale autorisée par PHP.";
		break;
		case "2" : $erreur = "fichier dépassant la taille maximale autorisée par le formulaire.";
		break;
		case "3": $erreur = "fichier transféré partiellement.";
	}
}

if ($_FILES['avatar']['size'] > $maxsize){
	$erreur = "Le fichier est trop gros";
}


$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png');
//1. strrchr renvoie l'extension avec le point (« . »).
//2. substr(chaine,1) ignore le premier caractère de chaine.
//3. strtolower met l'extension en minuscules.
$extension_upload = strtolower(  substr(  strrchr($_FILES['avatar']['name'], '.')  ,1)  );
if ( in_array($extension_upload,$extensions_valides) ){
	


/*
$image_sizes = getimagesize($_FILES['icone']['tmp_name']);
if ($image_sizes[0] > $maxwidth OR $image_sizes[1] > $maxheight){
	$erreur = "Image trop grande";
}

*/
  $nom = "{$password}.{$extension_upload}";
  
  
if ( !move_uploaded_file($tmp,$folder . $nom))
{
	exit("Impossible de mettre en ligne la photo : ". $_FILES['avatar']['name'] ." ". $erreur);
}
echo "todo bene";

include('../default/page/bdd.php');

$req = "UPDATE `user` SET img_avatar = '$nom' WHERE iduser = '$id'";
$req = $bdd->exec($req);

header('location: profil.php');
}
else {
	exit("Extension de fichier incorrect !");
}	
?>
