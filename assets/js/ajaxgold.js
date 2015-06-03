
function getDataReturnText(url, callback)
{ 
  var name=$("#fname").val().toString();
  var email=$("#email").val().toString();
  var data="?name="+name+"&email="+email;
  url+=data;
  var XMLHttpRequestObject = false; 
  if (window.XMLHttpRequest) {
    XMLHttpRequestObject = new XMLHttpRequest();
  } else if (window.ActiveXObject) {
    XMLHttpRequestObject = new 
     ActiveXObject("Microsoft.XMLHTTP");
  }

  if(XMLHttpRequestObject) {
    XMLHttpRequestObject.open("GET", url); 

    XMLHttpRequestObject.onreadystatechange = function() 
    { 
	  document.getElementById('load').innerHTML = "<center><img src='"+document.getElementById('loading').value+"'></center>";
      if (XMLHttpRequestObject.readyState == 4 && 
        XMLHttpRequestObject.status == 200) { 
		   doaction(XMLHttpRequestObject.responseText);
          delete XMLHttpRequestObject;
          XMLHttpRequestObject = null;
      } 
    } 

    XMLHttpRequestObject.send(null); 
  }
}

function updatecnt(url,action)
{
  url+="dashboard/updatecount/"+action;
  var XMLHttpRequestObject = false; 
  if (window.XMLHttpRequest) {
    XMLHttpRequestObject = new XMLHttpRequest();
  } else if (window.ActiveXObject) {
    XMLHttpRequestObject = new 
     ActiveXObject("Microsoft.XMLHTTP");
  }

  if(XMLHttpRequestObject) {
    XMLHttpRequestObject.open("GET", url); 

    XMLHttpRequestObject.onreadystatechange = function() 
    { 
      if (XMLHttpRequestObject.readyState == 4 && 
        XMLHttpRequestObject.status == 200) { 
		   onupdatecount(XMLHttpRequestObject.responseText);
          delete XMLHttpRequestObject;
          XMLHttpRequestObject = null;
      } 
    } 

    XMLHttpRequestObject.send(null); 
  }	
}

function doaction(text)
{
	var hostname=$("#hostname").val().toString();
	if(text.localeCompare("login"))
	{
		hostname+="dashboard";
		window.location=hostname.toString();
	}
	else if(text.localeCompare("added"))
	{
		hostname+="dashboard";
		window.location=hostname.toString();
	}
}

function onupdatecount(cnt)
{
   var dt=new Date();
   var data=dt.getHours()+":"+ dt.getMinutes()+":"+ dt.getSeconds();
 
  if(cnt>=4){
	url=$("#hostname").val().toString();
  	url+="dashboard/enduser/"+data;
  	var XMLHttpRequestObject = false; 
  	if (window.XMLHttpRequest) {
   	 XMLHttpRequestObject = new XMLHttpRequest();
  	} else if (window.ActiveXObject) {
   	 XMLHttpRequestObject = new 
    	 ActiveXObject("Microsoft.XMLHTTP");
 	 }

  if(XMLHttpRequestObject) {
    XMLHttpRequestObject.open("GET", url); 

    XMLHttpRequestObject.onreadystatechange = function() 
    { 
      if (XMLHttpRequestObject.readyState == 4 && 
        XMLHttpRequestObject.status == 200) { 
		  window.location=$("#hostname").val().toString();
          delete XMLHttpRequestObject;
          XMLHttpRequestObject = null;
      } 
    } 

    XMLHttpRequestObject.send(null); 
  }	
  }//IF
  else if(cnt==3)
  {
	$("#spinbtn").fadeOut(10);
	$("#finish").fadeIn(10);  
  }
}


function toSeconds(time_str) {
    // Extract hours, minutes and seconds
    var parts = time_str.split(':');
    // compute  and return total seconds
    return parts[0] * 3600 + // an hour has 3600 seconds
    parts[1] * 60 + // a minute has 60 seconds
    +
    parts[2]; // seconds
}

function getDiff()
{
	var dt=new Date();
   	var data=dt.getHours()+":"+ dt.getMinutes()+":"+ dt.getSeconds();
   
	var a = $("#expire").val().toString();
	var b = data;
	return time=Math.abs(toSeconds(a) - toSeconds(b));	
	
}


var c=1800;
var t;
var timer_is_on=0;
function timediff()
{
	var dt=new Date();
   	var data=dt.getHours()+":"+ dt.getMinutes()+":"+ dt.getSeconds();
   
	var a = $("#expire").val().toString();
	var b = data;

	var difference = Math.abs(toSeconds(a) - toSeconds(b));
	c-= Math.abs(toSeconds(a) - toSeconds(b));
	//If diff is < 1800 sec i.e. <half hour then dont allow user to play
	if(difference<1800)
	{
		$("#spinbtn").fadeOut(1000);
		this.timedCount();
	}
// format time differnece
/*var result = [
    Math.floor(difference / 3600), // an hour has 3600 seconds
    Math.floor((difference % 3600) / 60), // a minute has 60 seconds
    difference % 60
];
// 0 padding and concatation
result = result.map(function(v) {
    return v < 10 ? '0' + v : v;
}).join(':');
alert(result);	*/
}


function timedCount()
{
    $("#timer").html(c);
    c=c-1;
	if(c<=0)
 	 {
   			$("#timer").addClass("success");
  	  }
	 else
	 {
		t=setTimeout("timedCount()",1000);	 
	 }
   
}
