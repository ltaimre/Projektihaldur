
$(document).ready(function(){
	console.log("Loen skripti!");
	


$(".send").submit(function(event) {
  window.location.href="?page=project"
});

  $(function() {
    $( "#sortable" ).sortable();
  });
		
	
		
		
});

function additem(){
	//loob listielemendi
	var node=document.createElement("LI");
	node.className="taskelement undone";
	//lisab sellele tekstiväärtuse
	var newtask = document.getElementById('newtask').value;
	var textnode=document.createTextNode(newtask);
	node.appendChild(textnode);
	//loob checkboxi ja lisab selle listielemendile
	var input = document.createElement("INPUT");
	input.setAttribute("type", "checkbox"); 
	input.className="chbx";
	input.onclick=  function(){done(this)};
	node.appendChild(input);
	//lisab selle dokumenti
	document.getElementById("sortable").appendChild(node);
};

function done(e){
	console.log("töötan");
	if( $(e).parent().hasClass('undone') ) {
		$(e).parent().removeClass('undone').addClass('done'); }
	else
		
		{
		if( $(e).parent().hasClass('done') ) {
		$(e).parent().removeClass('done').addClass('undone'); }
		}
}

function savelist(e){
		console.log("kohal");
		var x = document.getElementsByClassName(e);
		var tasklist = new Array();
		$.each($(x), function (index, value) { 
			tasklist[index] = $(value).text();
			console.log(tasklist[index]); 
			});	
			
		$.post( "?page=project", 
		{ name: "John", time: "2pm" } );
		

}

		
		





	




