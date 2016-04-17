
/* kella ehitamiseks on ammutatud inspiratsiooni siit 
http://www.sitepoint.com/build-javascript-countdown-timer-no-dependencies/ */


var deadline = "01-06-2016";

var dateObj = new Date();
var month = dateObj.getMonth() + 1; //months from 1-12
var day = dateObj.getDate();
var year = dateObj.getFullYear();

var newdate = day + "-" + month + "-" + year;

var katsetus = new Date();


function getTimeRemaining(endtime){
  var t = Date.parse(endtime) - Date.parse(new Date());
  console.log(t);
  //var days = Math.floor( t/(1000*60*60*24) );
  return {
    'total': t,
   // 'days': days,
  };
}


  
function initializeClock(id, endtime){
  var clock = document.getElementById(id);
  var te = getTimeRemaining(endtime);
  clock.innerHTML = te;
  } 

window.onload = function() {
	//initializeClock("clockdiv", deadline);
	var deadline = "01-06-2016";
	var praegu = new Date();
	console.log(deadline);
	console.log(newdate);
	console.log(deadline-newdate);
	
}
}








