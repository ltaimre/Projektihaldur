window.onload = function() {
  console.log("Loen skripti!");
};


function savetasks(MinuKlass){
	console.log(MinuKlass);
	var tasklist = document.getElementsByClassName(MinuKlass);
	console.log(tasklist);
	var i;
	for (i = 0; i < tasklist.length; i++) {
    console.log(tasklist[i].textContent);
	} 
} 







