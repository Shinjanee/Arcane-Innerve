<!DOCTYPE html>
<html>
<head>
<meta name ="author" content="">
<title>Innerve'17</title>
	<link rel="stylesheet" href="style.css">
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
	<div class="title">
		<h1> Level 10: </h1>
	</div>
	<div class="level">
		<div class="ques">
			<!--<a href="data:image/jpeg;base64,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"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPAAAADSCAMAAABD772dAAAAV1BMVEX///+/KB27AAC/JRrALyXy3t379PS8DQDpwsG9FgDdoJ29Gwv++/r8+Pjdm5fmu7nenZnclpLEPjbGRj7iqaXIT0jCLyTcmpj57u7EPDPHSUK9HQ7HTUapTvXcAAAB5ElEQVR4nO3Y0U7CQBBAUXYVFQqiIoLi/3+nJYWYAA/dNYBze+/7JnsyQ9swGpmZmZmZmf2xzXp61Hp26ztdtHGeHJUfbn2nizbO6SjBrAQLhiVYMCzBgmEJFgxLsGBYggXDEiwYlmDBsAQLhiVYMCzBgmEJFgxLsGBYggXDEiwYlmDBsAQLhiVYMCzBgmEJFgxLsGBYggXDEiwYlmDBsAQLhiVYMCzBgmEJFgxLsGBYggXDEiwYlmDBsAQLhiVYMCzBgmEJFgxLsGBYggXDEiwYlmDBsAQLhiVYMCzBgmEJFgxLsGBYggXDEiwYlmDBsAQLhiVYMCzBgv9ns3nlwajgh4/Kg2HBeTWrOhgX3KyqDsYFp2ZZczAwODU1Wx0ZXCUODU7NW7H4DLj2DXfV5t29m+/S256CJ4unAC0maS8unPEpOD2G6HDb0q0+Aw5W81W01fHBrbhkxgBw2pZsNQGctgVbjQCX/I4Z4LT97LvVEHDaLnt+IFLA7fu4nxgDzq/DmnB+6eelgPvOlwLOz329DHDvfYaA++8zA1wy3x34Lma/3mmJdzSe3MfsIC54XsUu1+xz4Lp/LUv3OXAdeDDz3YOHM98OnN9vfYsr1oKHNN8deFjeFjykfW7blHw/m1msfgAhVTWibc2ZuAAAAABJRU5ErkJggg==" 
			</a>-->
			<img src="arcane pics/arrow.jpeg"/>
			<a href="https://farminc.files.wordpress.com/2009/10/whatbrings.jpg"><!--<img height="50" width="100" style="border-radius:20px;; margin-left:5px;" id="img-pos" src="data:image/jpeg;base64,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"  ></a>
    	--><img height="50" width="100" style="border-radius:20px; margin-left: 2%;" src="arcane pics/click.jpg">
		</div>
		
		<div class="ans">
		<form method="post">
			<input type="text" placeholder="Your answer" name="ans10" id="ans10" autocomplete="off" ><br><br>
			<input type="submit" name="submit" class="button">
			<input type="reset" name="reset" class="button-reset">
			<input type="button" name="Leaderboard" value="Leaderboard" onClick="window.location.href ='score.php'" class="button-leader">
		</form>
		</div>
	</div>
	<?php
			include("DBConnection.php");

			session_start();
			$username = $_SESSION['email']; //retrieve the session variable
			?>
			<p id="player">Player: <?php echo $username ?> </p>
			<?php
			if(isset($_POST['ans10']))
			{
				$check=$_POST["ans10"];
				if ($_POST["ans10"] == 'url'){
				$qry = "UPDATE signup SET ans10='$check', score='11' WHERE mail='$username'";
				$res = mysqli_query($db,$qry);
				header("location:ques11.php");
				}
			
			else
			{
				$er= 'Try Again';
				echo "<script>alert('$er')</script>";
				$q = stripslashes('$check');

			}
			}


		?>


</body>

</html>
