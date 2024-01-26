<?php
ob_start();
require_once("scripts/config.php");
require_once("scripts/functions.php");
require_once('classes/class.php');

$connect =new connection();
 	$connect->connectTodatabase();
	$connect->selectDatabase();

//  Developed by Robinson Agaga 
//  This notice MUST stay intact for legal use




if(isset($_GET['news_id']) && $_GET['news_id'] != ""){
	if (ExecuteQuery("delete from projects where project_id='".$_GET['news_id']."'"));
	
	header("location:./updates"); 
	exit;
}

if(isset($_GET['quote_id']) && $_GET['quote_id'] != ""){
	if (ExecuteQuery("delete from quotes where quote_id='".$_GET['quote_id']."'"));
	
	header("location:./quotes"); 
	exit;
}

if(isset($_GET['interview_id']) && $_GET['interview_id'] != ""){
	if (ExecuteQuery("delete from interviews where interview_id='".$_GET['interview_id']."'"));
	
	header("location:./interviews"); 
	exit;
}

if(isset($_GET['remark_id']) && $_GET['remark_id'] != ""){
	if (ExecuteQuery("delete from remarks where remark_id='".$_GET['remark_id']."'"));
	
	header("location:./remarks"); 
	exit;
}

if(isset($_GET['exec_id']) && $_GET['exec_id'] != ""){
	if (ExecuteQuery("delete from executives where exec_id='".$_GET['exec_id']."'"));
	
	header("location:./executives"); 
	exit;
}

if(isset($_GET['video_id']) && $_GET['video_id'] != ""){
	if (ExecuteQuery("delete from videos where video_id='".$_GET['video_id']."'"));
	
	header("location:./videos"); 
	exit;
}

if(isset($_GET['update_id']) && $_GET['update_id'] != ""){
	if (ExecuteQuery("delete from palliatives where update_id='".$_GET['update_id']."'"));
	
	header("location:./palliatives"); 
	exit;
}

?>