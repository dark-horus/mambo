<?php 
session_start();
if(isset($_SESSION['id'])){
if(isset($_SESSION['autorize'])){
unset($_SESSION['id']);
}
else {
session_destroy();
}
}
header('location: ../../accueil/index.php');
?>