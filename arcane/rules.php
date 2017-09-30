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
	<div class = "title">Rules</div>
		<div class = "rules">
			<i>Read the instructions carefully before starting the hunt:</i>
			<ol>
				<li>It is an individual event.<br><br>
				<li>Event is open to all college/institute students.<br><br>
				<li>The answers of all the levels would be in lower cases and should not include any spacing.<br><br>
				<li>Special characters are allowed.<br>
					For example: rohan'sdog<br><br>
				<li>There is no restriction on the number of attempts for any level.<br><br>
				<li>Google search is allowed.<br><br>
				<li>Look for hints on the page, url or page source.<br><br>
				<li>Hints will also be provided at our facebook page< fblink>.<br><br>
				<li>Anyone found practising harmful activities or violating rules would be straight away disqualified.
			</ol>
		</div>
		<button class = "button">
			<a href = "log.php">Start!</a>
		</button>
	</div>
</body>
</html>
