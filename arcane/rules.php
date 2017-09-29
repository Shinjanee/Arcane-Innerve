<!DOCTYPE html>
<html>
<head>
<meta name ="author" content="">
<title>Innerve'17</title>
	<link rel="stylesheet" type="text/css" href="home.css">
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
		case 37 : //left arrow
            if (event.altKey){ 
                event.returnValue = false;
                event.keyCode = 0;
                return false;
            }
		case 39 : //Right arrow
            if (event.altKey){ 
                event.returnValue = false;
                event.keyCode = 0;
                return false;
            }
		case 85 : //U button
            if (event.ctrlKey){ 
                event.returnValue = false;
                event.keyCode = 0;
                return false;
            }
    }
}
window.oncontextmenu = function () {
return false;
}
	window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="no-back-button";}
</script>
</head>
<body>
	<div class = "instructions">
	<div class = "title">Instructions</div>
		<div class = "rules">
			<i>Read the instructions carefully before starting the hunt:</i>
			<ul>
				<li>The game play involves getting into the next level after submitting the appropriate answer at each level.<br><br>
				<li>Submit the answers in lower case.<br><br>
				<li>No space allowed.<br><br>
				<li>Apostrophe allowed.<br>
					For example: rohan'sdog<br><br>
				<li>Google search is allowed.<br><br>
				<li>Look for the hints on the webpage, the source code and the URL.<br><br>
				<li>There is no restriction on the number of attempts.<br><br>
				<li>Hints will be provided at our facebook page, fblink.
			</ul>
		</div>
		<button class = "button">
			<a href = "ques1.php">Start!</a>
		</button>
	</div>
</body>
</html>
