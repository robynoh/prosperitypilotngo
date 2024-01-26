<?php
ob_start();
session_start();
require_once("../scripts/config.php");
require_once("../scripts/functions.php");


if($_SESSION['loggedin']== true){
	session_destroy();
	header("location:./"); 
	exit;
}
ob_end_flush();
?>