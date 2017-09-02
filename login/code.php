<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
    <style type="text/css">
	h1{text-align:center;
	background-color:white;
	padding-top:40px;
	padding-bottom:40px;
	border color-black;
	border-width:8px;
	border-style:double;
	color:black;
	font-family:arial;
	}
	body{
	background-image:url(black.jpg);
	color:white;
	background-repeat:no-repeat fixed;
	background-size:cover;	
	}
	a:visited{
color:white;}
	ul{
	
	font-weight:bold;
	line-height:300%;
	font-size: 20px;}
	
	
	button{background-color:black;
	color:white;
	padding:25px;
	border-width:3px;
	border-style:dashed;
	font-weight:bold;
	position:absolute;
	top:80%;
	left:45%;
	}
	</style>

</head>
<body>
    <script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
	document.onkeydown = function(){
  switch (event.keyCode){
        case 116 : //F5 button
            event.returnValue = false;
            event.keyCode = 0;
            return false;
        case 82 : //R button
            if (event.ctrlKey){ 
                event.returnValue = false;
                event.keyCode = 0;
                return false;
            }
    }
}

	window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="no-back-button";}
</script>
  <h1><u>INSTRUCTIONS</u></h1>
  
   <ul><big>
     <li>The answers should be in small letters only.</li>
	 <li>The answers do not have any number.</li>
     <li>There should be no space between letters in the answers.</li>
     <li>There is one hint for each question which is hidden on the page itself.</li>
   
	</big>
	</ul> 
<button><a href="start.php">START GAME</a></button>



</body>
</html>