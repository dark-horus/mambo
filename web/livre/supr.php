<?php

ini_set("display_errors",1);
ini_set("error_reporting",E_ALL^E_NOTICE);

session_start();
include('../default/page/bdd.php');

$id = $_GET["commentaire"];

	try {
		$bdd->query("DELETE FROM `etape` WHERE `ID` = '$id'");
	} catch(Exception $e) {
		echo $e->getMessage();
	}
	header('location: index.php');
?>