<?php
	
	session_start();
	require_once('functions.php');
	connect_db();

	if(!isset($_SESSION['user']))
	{
	header("Location: open.php");
	}
	
	$result=mysqli_query($GLOBALS['connection'], "SELECT * FROM ltaimre_users WHERE user_id=".$_SESSION['user']);
	$userRow=mysqli_fetch_array($result);
	
	
	
	echo $_SESSION['name'];
	//$tasks=get_array("taskname", "ltaimre_tasks", "project_ID", $_GET["projectid"]); 
	//include "Views/greetingheading.html";
	include "Views/projectpage.html";
	
	
	

	
	
	?>
	

  

