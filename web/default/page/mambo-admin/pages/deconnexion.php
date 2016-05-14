<?php 
session_start();
if(isset($_SESSION['autorize'])){
if(isset($_SESSION['id'])){
unset($_SESSION['autorize']);
}
else {
session_destroy();
}
}
header('location: login.php');
?>