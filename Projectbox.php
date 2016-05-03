<?php
require_once('functions.php');
connect_db();
$projects=get_array("projectname", "ltaimre_projects"); 

foreach ($projects as $project) {
		include "projectboxview.html";
		}
?>