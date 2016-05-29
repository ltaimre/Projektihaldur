
$(document).ready(function(){
	console.log("Loen skripti!");
	$("#salvestusnupp").click(function(){
		var tasklist = new Array();
		$.each($('.actionlist'), function (index, value) { 
			tasklist[index] = $(value).text();
			console.log(tasklist[index]); 
			});	
	
});


$(".send").submit(function(event) {
  window.location.href="?page=project"
});


$("#change").click(function(){
		console.log("klikk");
		document.getElementsByClassName("actionlist").contentEditable = true;
		document.getElementsByClassName("actionlist").className = "newlist";
		//var tasklist=document.getElementsByClassName("actionlist");
		
		//$.each($('.actionlist'), function (index, value) { 
			//tasklist[index].contentEditable = true;
			//tasklist[index].className = "newlist";
//});	
		
});
/*
	var $elements = $('label');
$('.cb').change(function() {
    var $checkbox = $(this);
    if ($checkbox.prop('checked')) {
        makeEven($elements);
    } else {
        undoEven($elements);
} */

		
			
		
});
	
		



		
		





	




