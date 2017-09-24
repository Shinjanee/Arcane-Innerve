<!DOCTYPE html>
<html>
<head>


	<title> Cryptic event </title>
	<link rel="stylesheet" href="style.css">
	 
</head>
<body oncontextmenu="return false">
	<script>
	document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 67 || 
             e.keyCode === 86 || 
             e.keyCode === 85 || 
             e.keyCode === 117)) {
            alert('not allowed');
            return false;
        } else {
            return true;
        }
	};
	</script>
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
	
	<div class="title">
		<!-- <h1> Question 1: </h1> -->
	</div>
	<div class="level">
		<div class="ques">
			<p> "We must all try, in every way we can, to send the message that reading is critical to our lives and to the life of our nation."</p>
		</div>
		
		<div class="ans">
		<form method="post">
			<input type="text" placeholder="Your answer" name="ans9" id="ans9" autocomplete="off">
			<input type="submit" name="submit">
			<input type="reset" name="reset">
			<input type="button" name="Leaderboard" value="Leaderboard" onClick="window.location.href ='Score.php'">
		</form>
		</div>
	</div>
	<?php
			include("DBConnection.php");

			session_start();
			$username = $_SESSION['email']; //retrieve the session variable
			?>
			<p>Player: <?php echo $username ?> </p>
			<?php
			if(isset($_POST['ans9']))
			{
				$check=$_POST["ans9"];
				if ($_POST["ans9"] == 'george bush virus'){
				$qry = "UPDATE signup SET ans9='$check', score='10' WHERE mail='$username'";
				$res = mysqli_query($db,$qry);
				header("location: ques10.php");
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
