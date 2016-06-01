
$(document).ready(function(){

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
	$(input).attr("name", "doneStatus[]");
	node.appendChild(input);
	//loob hidden textfieldi ja lisab selle listielemendile
	var input = document.createElement("INPUT");
	input.setAttribute("type", "hidden"); 
	$(input).attr("name", "taskName[]");
	input.value=document.getElementById('newtask').value;
	node.appendChild(input);
	//lisab selle dokumenti
	document.getElementById("sortable").appendChild(node);
};

function addheading(){
	//loob listielemendi
	var node=document.createElement("H3");
	node.className="projectheading";
	//lisab sellele tekstiväärtuse
	var newproject = document.getElementById('newproject').value;
	var textnode=document.createTextNode(newproject);
	node.appendChild(textnode);
	//loob hidden textfieldi ja lisab selle listielemendile
	var input = document.createElement("INPUT");
	input.setAttribute("type", "hidden"); 
	$(input).attr("name", "someName");
	input.value=document.getElementById('newproject').value;
	node.appendChild(input);
	//lisab selle dokumenti
	document.getElementById("forheading").appendChild(node);
	$( ".temporary" ).hide();
};

//märgib nimekirja elemendi tehtud või tegemata
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



		
		





	




