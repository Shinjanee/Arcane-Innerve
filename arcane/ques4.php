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
			<img src= "arcane pics/ qrcode.jpg">
		</div>
		
		<div class="ans">
		<form method="post">
			<input type="text" placeholder="Your answer" name="ans4" id="ans4" autocomplete="off">
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
			if(isset($_POST['ans4']))
			{
				$check=$_POST["ans4"];
				if ($_POST["ans4"] == 'bees'){
				$qry = "UPDATE signup SET ans4='$check', score='5' WHERE mail='$username'";
				$res = mysqli_query($db,$qry);
				header("location: ques5.php");
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
