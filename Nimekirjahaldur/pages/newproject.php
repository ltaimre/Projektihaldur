<?php
connect_db();
if(isset($_POST["projectheading"])) {
$projectname= htmlspecialchars($_POST['someName']);
$userID= $_SESSION['user'];
	if(mysqli_query($GLOBALS['connection'], "INSERT INTO ltaimre_projects(projectname,user_ID) VALUES('$projectname','$userID')"))
{
	$projectid= mysqli_insert_id($GLOBALS['connection']);
	if(isset($_POST["taskName"])) {
		$index=0;
		$tasks=$_POST["taskName"];
		foreach ($tasks as $task) {
			if(isset($_POST['doneStatus'][$index])) {
			$htmltask=htmlspecialchars($task);
			mysqli_query($GLOBALS['connection'], "INSERT INTO ltaimre_tasks(taskname,project_ID, taskstatus) VALUES('$htmltask','$projectid', 'tehtud')");
		}
		else {
			$htmltask=htmlspecialchars($task);
			mysqli_query($GLOBALS['connection'], "INSERT INTO ltaimre_tasks(taskname,project_ID, taskstatus) VALUES('$htmltask','$projectid', 'tegemata')");
			}
		$index=$index+1;
	}
 } 
 
  } 
header("Location: ?page=mainview");

 } 
 
include("views/header.html");
include("views/newproject.html");
close_db()
 
	?>
	
