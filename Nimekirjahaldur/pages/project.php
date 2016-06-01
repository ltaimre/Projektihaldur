<?php

connect_db();

if(isset($_POST['projectid'])&& $_POST['projectid'] !== 'new'){
$tasks=get_array("task_ID", "ltaimre_tasks", "project_ID", $_POST['projectid']); 
$result=mysqli_query($GLOBALS['connection'], "SELECT * FROM ltaimre_projects WHERE project_ID=".$_POST['projectid']);
$projectRow=mysqli_fetch_array($result);
$project=$projectRow["projectname"];
}

include("views/header.html");
include("views/project.html");

close_db();

?>



	
