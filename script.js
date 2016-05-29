
$(document).ready(function(){
	console.log("Loen skripti!");
	$("#salvestusnupp").click(function(){
		var tasklist = new Array();
		$.each($('.actionlist'), function (index, value) { 
			tasklist[index] = $(value).text();
			console.log(tasklist[index]); 
			});	
	
});

$( "#target" ).submit(function( event ) {
  window.location.href="?page=project"
});
		
		});
		






	




