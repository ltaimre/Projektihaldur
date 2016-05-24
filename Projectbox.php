<?php
require_once('functions.php');
connect_db();
$projects=get_array("projectname", "ltaimre_projects", "user_ID", "6"); 

foreach ($projects as $project) {
		include "projectboxview.html";
		}
?>	
<html>
<hr>
</html>
