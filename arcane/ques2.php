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
	<div class="title">
		<!-- <h1> Question 1: </h1> -->
	</div>
	<div class="level">
		<div class="ques">
			<h1> "Half-son of Hephaestus loved this language. Didn’t he?"</h1>
			<p> " -.-. / --- / -. / --. / .-. / .- / - / ..- / .-.. / .- / - / .. / --- / -. / ... "</p>
		</div>
		
		<div class="ans">
		<form method="post">
			<input type="text" placeholder="Your answer" name="ans2" id="ans2" autocomplete="off">
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
			if(isset($_POST['ans2']))
			{
				$check=$_POST["ans2"];
				if ($_POST["ans2"] == 'congratulations'){
				$qry = "UPDATE signup SET ans2='$check', score='3' WHERE mail='$username'";
				$res = mysqli_query($db,$qry);
				header("location: ques3.php");
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
