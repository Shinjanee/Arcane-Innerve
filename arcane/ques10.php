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
			<p> " Your Text Here "</p>
		</div>
		
		<div class="ans">
		<form method="post">
			<input type="text" placeholder="Your answer" name="ans10" id="ans10" autocomplete="off" >
			<input type="submit" name="submit">
			<input type="reset" name="reset">
			<input type="button" name="Leaderboard" value="Leaderboard" onClick="window.location.href ='score.php'">
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
			if(isset($_POST['ans10']))
			{
				$check=$_POST["ans10"];
				if ($_POST["ans10"] == 'pinterest'){
				$qry = "UPDATE signup SET ans10='$check', score='11' WHERE mail='$username'";
				$res = mysqli_query($db,$qry);
				header("location: end.php");
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