<?php

//ühendus andmebaasiga
function connect_db(){
	global $connection;
	$host="localhost";
	$user="test";
	$pass="t3st3r123";
	$db="test";
	$connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa ühendust mootoriga- ".mysqli_error());
	mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));
}

//laeb projektid
function get_tasks() {
	$tasks = array();
	
	$taskquery= mysqli_query($GLOBALS['connection'], "SELECT taskname FROM ltaimre_tasks");
	while ($row = mysqli_fetch_assoc($taskquery)) {
			$tasks[]= $row['taskname'];
		}
		
	return($tasks);
}

?>