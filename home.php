<?php
session_start();
require_once('functions.php');
connect_db();

if(!isset($_SESSION['user']))
{
 header("Location: open.php");
}

$_SESSION['name'] = "John";

echo $_POST["projectid"];
$result=mysqli_query($GLOBALS['connection'], "SELECT * FROM ltaimre_users WHERE user_id=".$_SESSION['user']);
$userRow=mysqli_fetch_array($result);

$projects=get_array("project_ID", "ltaimre_projects", "user_ID", $_SESSION['user']); 

include "Views/pagehead.html";


?>
