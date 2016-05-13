<?php
session_start();
if($_SESSION['autorize'] != "allowedtoconnect"){header('location: login.php');}
else {
	$etape = mysql_escape_string($_GET['etape']);
	include('bdd.php');
	if($etape == 'livre'){
			$req = "UPDATE `etape` SET `notif` = 0 WHERE `etape_ID` = 'Livre';";
	}
	if($etape == 'chien'){	
		$req = "UPDATE `etape` SET `notif` = 0 WHERE `etape_ID` = 'Chien';";
	}
	
	$bdd->exec($req);
	header('location: tables.php');
}


?>