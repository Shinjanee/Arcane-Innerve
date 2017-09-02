<html>
<link href="log.css" rel="stylesheet">
<head>
	<meta charset="UTF-8">
	<title>AnimaForm</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>
<body>
	<main>
		<div class="buttons login-button-active" data-action="animated">
			<button class="login-button">
				<span class="log-link login-button-active" data-action="animated">Login</span>
				<span class="login-underline login-button-active" data-action="animated"></span>
			</button>
			<button class="signup-button">
				<span class="sign-link" data-action="animated">Sign Up</span>
				<span class="signup-underline login-button-active" data-action="animated"></span>
			</button>
		</div>
		<div class="forms">
			<form class="login-form login-button-active" action="#" method="POST" data-action="animated">
				<fieldset>
					<legend>Please, enter your email and password for login.</legend>
					<label for="login-email">E-mail</label>
					<input id="login-email" type="email" name="email" required autocomplete="off">
					<label for="login-password">Password</label>
					<input id="login-password" type="password" name="password" required autocomplete="off">
				</fieldset>
				<input type="submit" value="Login" name="login">
				
				<?php
 
				include("DBConnection.php");
				session_start(); 
  
				if(isset($_POST['login']))
				{ 
					if (empty($_POST['email']) || empty($_POST['password'])) 
						{
							print "Please enter the correct Username and Password";
						} 
  
					$usernameLogn = $_POST['email']; 
					$passwordLogin = $_POST['password'];
  
					$myusername = stripslashes($usernameLogn); // stripslashes() is used to clean up data retrieved from an HTML form
					$mypassword = stripslashes($passwordLogin);
  
					$myusername = mysqli_real_escape_string($db,$_POST['email']); // Escapes special characters in a string for use in an SQL statement
					$mypassword = mysqli_real_escape_string($db,$_POST['password']); 
 
					$query = "SELECT * FROM signup WHERE mail = '$myusername' and password = '$mypassword'"; //Fetching all the records with input credentials
					$result = mysqli_query($db,$query);
					$count = mysqli_num_rows($result);
  
					if($count == 1)
					{
						$_SESSION['email']=$myusername; //Storing the username value in session variable so that it can be retrieved on other pages 
 
						$qry = "UPDATE signup SET loggedin='1', score='1' WHERE mail='$myusername'"; // to maintain Logged-in Status
						$res = mysqli_query($db,$qry);
						header("location: code.php"); // user will be taken to profile page
					}
					else
					{
						$er= 'Incorrect username or password'; 
						echo "<script>alert('$er')</script>";
						?>
						<br><a href="log.php"></a>
						<?php 
					} 
				}
 
	?>
			</form>
			<form class="signup-form" action="#" method="post" data-action="animated">
				<fieldset>
					<legend>Please, enter your email, password and password confirmation for sign up.</legend>
					<label for="signup-name">Name</label>
					<input id="signup-name" type="text" name="name" required autocomplete="off">
					<label for="signup-college">College</label>
					<input id="signup-college" type="text" name="college" required autocomplete="off">
					<label for="signup-email">E-mail</label>
					<input id="signup-email" type="email" name="email" required autocomplete="off">
					<label for="signup-password">Password</label>
					<input id="signup-password" type="password" name="password" required autocomplete="off" >
					<label for="signup-confirm-password">Confirm password</label>
					<input id="signup-confirm-password" type="password" name="password" required >
				</fieldset>
				<input name="submit" type="submit" value="Continue" id="submit">
				<?php
						
						error_reporting('E_ALL ^ E_NOTICE');
						if(isset($_POST['submit']))
						{
								$con=mysqli_connect('localhost','root','') ;
								if ( !$con ) 
								{
									die("Connection failed : " . mysqli_error());
								}
								$dbcon=mysqli_select_db($con,'arcane');
								if ( !$dbcon )
								{
									die("Database Connection failed : " . mysqli_error());
								}
								$name=$_POST['name'];
								$password=$_POST['password'];
								$mail=$_POST['email'];
								$collge=$_POST['college'];
								$q=mysqli_query($con,"select * from signup where name='".$name."' or mail='".$mail."' ") or die(mysqli_error());
								$n=mysqli_fetch_row($q);
								if($n>0)
								{
									$er='The username name '.$name.' or mail '.$mail.' is already present in our database';
									echo "<script>alert('$er')</script>";
									?>
									<br><a href="log.php"></a>
									<?php 
								}
								else
								{
									$insert=mysqli_query($con,"insert into signup(name,password,mail,college) values('".$name."','".$password."','".$mail."','".$collge."')") or die(mysqli_error());
									if($insert)
									{
										$er='Values are registered successfully';
										echo "<script>alert('$er')</script>";
									}
									else
									{
										$er='Values are not registered';
										echo "<script>alert('$er')</script>";
									}
								}
						}
				?>
</form>
</div>
</main>
<script src="log.js"></script>
</body>
</html>