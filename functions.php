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

//loeb andmebaasist nimekirja
function get_array($field, $filename, $id, $value) {
	$array = array();
	$command= "SELECT ".$field." FROM ".$filename." WHERE ".$id."='".$value."'";
	$arrayquery= mysqli_query($GLOBALS['connection'], $command);
	while ($row = mysqli_fetch_assoc($arrayquery)) {
			$array[]= $row[$field];
		}
	return($array);
}

//ühe elemendi lugemiseks
function get_item($field, $filename, $id, $value) {
	$command= "SELECT ".$field." FROM ".$filename." WHERE ".$id."=".$value;
	$item= mysqli_query($GLOBALS['connection'], $command);
	return($item);
}

?>