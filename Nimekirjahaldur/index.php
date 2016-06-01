<?php
session_start();
require_once('functions.php');

$page = "login";

if (isset($_GET['page']) && $_GET['page']!=""){
	$page=htmlspecialchars($_GET['page']);
}




switch($page){
	case "mainview":
		include("pages/main.php");
	break;
	case "login":
		include("pages/login.php");
	break;
	case "project":
		include("pages/project.php");
	break;
	case "newproject":
		include("pages/newproject.php");
	break;
	case "save":
		include("pages/save.php");
	break;
	default:
		include('pages/login.php');	
}

?>