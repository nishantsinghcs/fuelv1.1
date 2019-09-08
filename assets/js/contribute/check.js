/*!
  * Bootstrap v4.1.1 (https://getbootstrap.com/)
  * Copyright 2011-2018 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
  * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
  */
var passarray= new Array();
var failarray= new Array();
var currstrid=2;
  function getStrngstoPanel(id){
  	var cols = document.getElementsByClassName("trow");
  	for(i=0; i<cols.length; i++) {
    cols[i].style.removeProperty("background-color");// revert all previously selected to non seleted
  	}
  	//console.log("Data From Next Button: "+passarray);
  		if (typeof passarray !== 'undefined' && passarray.length > 0) {
	  	passarray.forEach(function(element) {
			  document.getElementById(element).style.backgroundColor = "#13bf13"; // Makes each passed element green
			});
	  	  	console.log("Pass: "+passarray);
  		}
  		if (typeof failarray !== 'undefined' && failarray.length > 0) {
	  	failarray.forEach(function(element) {
			  //console.log(element);
			  document.getElementById(element).style.backgroundColor = "#ff4007"; // Makes each passed element green
			});
	  	  	console.log("Fail: "+failarray);
  		}
  	document.getElementById(id).style.backgroundColor = "#d6e6d6";
  	var strid=$("#strid-"+id).html();
  	var projid=$("#projid-"+id).html();
  	var contxtid=$("#contxtid-"+id).html();
  	var valueid=$("#valueid-"+id).text();
  	var suggid=$("#suggid-"+id).text();
  	$("#panelstring").html(valueid);
  	$("#panelsuggestion").html(suggid);
  	$("#panelcontext").html(contxtid);
  	var slid=$("#slid-"+id).text();
  	currstrid=slid; //for getting currentlly selected string sl number
  }


document.onkeydown = navigateStrings;
function navigateStrings(e) {
	e = e || window.event;
	if (e.keyCode == '38') {
        // up arrow
       var slno= parseInt(currstrid);
		//console.log("slno: "+slno);
		var content = $("table tbody tr td:first-child:contains("+slno+")").parent().prev('tr').attr('id'); // get previous/next row
		//console.log(content);
		var suggestionid=content;
		getStrngstoPanel(suggestionid);
    }
    else if (e.keyCode == '40') {
        // down arrow
		var slno= parseInt(currstrid);
		//console.log("slno: "+slno);
		var content = $("table tbody tr td:first-child:contains("+slno+")").parent().next('tr').attr('id');
		//console.log(content);
		var suggestionid=content;
		getStrngstoPanel(suggestionid);
    }
    else if (e.keyCode == '37') {
       // left arrow
	     var slno= parseInt(currstrid);
		//console.log("slno: "+slno);
		var content = $("table tbody tr td:first-child:contains("+slno+")").parent().prev('tr').attr('id');
		//console.log(content);
		var suggestionid=content;
		getStrngstoPanel(suggestionid);
    }
    else if (e.keyCode == '39') {
       // right arrow
       var slno= parseInt(currstrid);
		//console.log("slno: "+slno);
		var content = $("table tbody tr td:first-child:contains("+slno+")").parent().next('tr').attr('id');
		//console.log(content);
		var suggestionid=content;
		getStrngstoPanel(suggestionid);
    }
    else if (e.keyCode == '112' || e.keyCode == '80' ) { 
       // 'P' key hit -> Pass the string
       var slno= parseInt(currstrid);
		var content = $("table tbody tr td:first-child:contains("+slno+")").parent().next('tr').attr('id');
		var content2 = $("table tbody tr td:first-child:contains("+slno+")").parent().attr('id');
		//console.log(content);
		var suggestionid=content;
		var index = failarray.indexOf(content2);
		if (index > -1) {   // Removing element from fail array
		  failarray.splice(index, 1);
		}
		if(passarray.indexOf(content2) === -1) { // Adding element to Passarray
	      passarray.push(content2);
	     // console.log("Data from Pass Button: "+passarray);
	    }
	    getStrngstoPanel(suggestionid);
    }
    else if (e.keyCode == '99' || e.keyCode == '67' ) { 
       // 'C' key hit -> Clear String
       var slno= parseInt(currstrid);
		var content = $("table tbody tr td:first-child:contains("+slno+")").parent().next('tr').attr('id');
		var content2 = $("table tbody tr td:first-child:contains("+slno+")").parent().attr('id');
		var suggestionid=content;
		var indexp = passarray.indexOf(content2);
		var indexf = failarray.indexOf(content2);
		if (indexp > -1) {		// Removing element from Pass and Fail array
		  passarray.splice(indexp, 1);
		}
		if (indexf > -1) {		// Removing element from Pass and Fail array
		  failarray.splice(indexf, 1);
		}
	    getStrngstoPanel(suggestionid);
    }
    else if (e.keyCode == '102' || e.keyCode == '70' ) { 
       // 'F' key hit -> Fail String
       var slno= parseInt(currstrid);
		var content = $("table tbody tr td:first-child:contains("+slno+")").parent().next('tr').attr('id');
		var content2 = $("table tbody tr td:first-child:contains("+slno+")").parent().attr('id');
		var suggestionid=content;
		var index = passarray.indexOf(content2);
		if (index > -1) {   // Removing element from pass array
		  passarray.splice(index, 1);
		}
		if(failarray.indexOf(content2) === -1) { // Adding elemnt into fail array
	      failarray.push(content2);
	     // console.log("Data from Pass Button: "+passarray);
	    }
	    getStrngstoPanel(suggestionid);
    }

}
