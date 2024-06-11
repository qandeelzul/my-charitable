<!DOCTYPE html>
<html lang="en" >
<head>
  <title>Login</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="Assets/Form/CSS/Login.css">
	
</head>
<body>
	
<!-- partial:index.partial.html -->
<form method="post">
<div class="container" onclick="onclick">
  <div class="top"></div>
  <div class="bottom"></div>
  <div class="center"><br><br><br>
    <h2>Please Sign In</h2>
    <input type="text" name="email" placeholder="Email Address" required />
    <input type="password" name="pass" placeholder="Password" required />
    <input type="submit" name="submit" value="Login" />
  
<?php 
	session_start();
	include("Connection.php");
	if($_POST['submit'])
	{
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$status = "Registered";

		$Query = "SELECT * from admin Where email = '$email' && pass = '$pass'";
		$data = mysqli_query($conn, $Query);
		$total = mysqli_num_rows($data);
		$result = mysqli_fetch_assoc($data);

		if($total == 1)
		{
			$_SESSION['email'] = $email;	
			header('location: Dashboard.php');
		}
		else
		{
			echo ("<h3>In-Currect Email and Password Combination</h3>");
		}
	}
	?>
    <h2>&nbsp;</h2>
  </div>
</div>
</form>
<!-- partial -->
  <script src='https://codepen.io/banik/pen/3f837b2f0085b5125112fc455941ea94.js'></script>
</body>
</html>
