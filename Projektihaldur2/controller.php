<?php
session_start();
require_once('functions.php');
connect_db();

$page = "login";



if (isset($_GET['page']) && $_GET['page']!=""){
	$page=htmlspecialchars($_GET['page']);
}




switch($page){
	case "mainview":
		include("views/main.html");
	break;
	case "login":
		include("views/login.html");
	break;
	case "project":
		include("views/project.html");
	break;
	default:
		include('views/login.html');	
}

?>