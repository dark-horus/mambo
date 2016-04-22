<?php

session_start();
include('bdd.php');

$id = $_GET["user"];
	//echo ($id);
	$bdd->query("DELETE FROM `user` WHERE iduser ='$id'");

	header('location: tables.php');
?>