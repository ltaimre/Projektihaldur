<?php
	
connect_db();
$projects=get_array("project_ID", "ltaimre_projects", "user_ID", $_SESSION['user']); 
include("views/header.html");
include("views/main.html");

close_db();

?>
	

