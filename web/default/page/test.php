<?php 
session_start();
if(!isset($_SESSION['id'])){
	echo "Marlene the best";
}
else {
echo $_SESSION['id'];
}