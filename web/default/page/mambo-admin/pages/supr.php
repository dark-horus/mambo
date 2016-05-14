<?php

ini_set("display_errors",1);
ini_set("error_reporting",E_ALL^E_NOTICE);

session_start();

include('bdd.php');
if(isset($_SESSION['autorize'])){
$id = $_GET["user"];
echo "DELETE FROM `user` WHERE `iduser` = '$id'".'<br>';
	echo $id;
	try {
		$bdd->query("DELETE FROM `etape` WHERE `user_ID` = '$id'");
		$bdd->query("DELETE FROM `user` WHERE `iduser` = '$id'");
	} catch(Exception $e) {
		echo $e->getMessage();
	}
	}
	header('location: tables.php');
	
?>