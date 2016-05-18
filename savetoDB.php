<?php
$tere = "Olen kohal";
echo $tere;

include "projekt.html";

if (isset($_POST["taskArray"]) && !empty($_POST["taskArray"])) {
    echo "Yes, mail is set";   
	$tasks = $_POST['taskArray'];
	foreach($tasks as $task){
    echo $task;}
}

else{  
    echo "N0, mail is not set";
}

?>
