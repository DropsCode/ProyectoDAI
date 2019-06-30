<?php 
IF(ISSET($_GET['destroy'])){
	session_start();
	session_destroy();
	header('Location: Contoller/controller_login.php');
}
?>