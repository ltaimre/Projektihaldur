<?php
require_once('functions.php');
connect_db();
$tasks=get_array("taskname", "ltaimre_tasks"); ?>

<ol>
<?php
foreach($tasks as $task): 
	$task = htmlspecialchars($task);?>
	<li><?php echo $task ?></li>
	<?php endforeach; ?>
</ol>
<?php
	
// on vaja ära tuua viimane tehtud ülesanne ja kaks esimest tegemata

//kui märgid ära, et on tehtud, siis on vaja ära tuua järgmine tegemata