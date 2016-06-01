<?php 
require_once('functions.php');
connect_db();
	
if(isset($_POST['tobesaved'])) {
		$savelist=$_POST["saveitem"];
		$index=0;
		$donelist=array();
		$undonelist=array();
		foreach ($savelist as $save) {
			if(isset($_POST['status'][$index])) {
				array_push($donelist, $save);
				update_table("ltaimre_tasks", "taskstatus", "tehtud", "taskname", $save );
				}
			else {
				array_push($undonelist, $save);
				update_table("ltaimre_tasks", "taskstatus", "tegemata", "taskname", $save);
				}
			$index=$index+1;
			
			}
		
		}


	
		
	?>