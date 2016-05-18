
$(document).ready(function(){
	console.log("Loen skripti!");
	$("#salvestusnupp").click(function(){
		var tasklist = new Array();
		$.each($('.actionlist'), function (index, value) { 
			tasklist[index] = $(value).text();
			console.log(tasklist[index]); 
			});
  
	$.ajax({        
       type: "POST",
       url: "savetoDB.php",
       data:  { taskArray : tasklist },
			}); 
			
	window.open("http://enos.itcollege.ee/~ltaimre/Projektihaldur/savetoDB.php");
	
		});
});

	




