
$(document).ready(function(){
	console.log("Loen skripti!");
	$("#salvestusnupp").click(function(){
		var tasklist = new Array();
		$.each($('.actionlist'), function (index, value) { 
			tasklist[index] = $(value).text();
			console.log(tasklist[index]); 
			});	
	
});


	$( ".projectbox" ).click(function() {
		var id = $(this).attr('id');
		console.log(id);
		$.get ({
		url: "project.php",
		data: {projectid: id},
		success: function(data){
			console.log(data),
			window.location.href="project.php?projectid="+data
				}
		});
		});
		
		});
		






	




