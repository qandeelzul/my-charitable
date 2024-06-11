<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="Assets/Form/CSS/Login.css">
	
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	
<link href="Assets/Main/CSS/bootstrap.css" rel="stylesheet" type="text/css">
<link href="Assets/Main/CSS/style.css" rel="stylesheet" type="text/css">
<link href="Assets/Main/CSS/animate.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="Assets/Main/JS/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="Assets/Main/JS/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="Assets/Main/JS/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="Assets/Main/JS/wow.js"></script>

</head>
<body>
	
<!--Header_section-->
<header id="header_outer">
  <div class="container">
    <div class="header_section">
      <div class="logo"><a href="Index.php"><p style="font-size: 38px; color: #ff9000;">CharitAble</p></a></div>
      <nav class="nav" id="nav">
        <ul class="toggle">
          <li><a href="#top_content">Home</a></li>
          <li><a href="#service">Services</a></li>
          <li><a href="#work_outer">About</a></li>
          <li><a href="#client_outer">Eligibility</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="Signup.php">Sign Up</a></li>
          <li><a href="Login.php">Login</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <ul class="">
          <li><a href="Index.php">Home</a></li>
          <li><a href="#service">Services</a></li>
          <li><a href="#work_outer">About</a></li>
          <li><a href="#client_outer">Eligibility</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="Signup.php">Sign Up</a></li>
          <li><a href="Login.php">Login</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
      <a class="res-nav_click animated wobble wow"  href="javascript:void(0)"><i class="fa-bars"></i></a> </div>
  </div>
</header>
<!--Header_section--> 
	
<!-- partial:index.partial.html -->
<form method="post">
<div class="container" onclick="onclick">
  <div class="top"></div>
  <div class="bottom"></div>
  <div class="center"><br><br><br>
    <h2>Please Sign In</h2>
    <input type="text" name="roll_no" placeholder="Roll No#" required />
    <input type="password" name="password" placeholder="Password" required />
    <input type="submit" name="submit" value="Login" />
  
<?php 
	session_start();
	include("Connection.php");

	$roll_no = $_POST['roll_no'];
	$password = $_POST['password'];
	$status = "Registered";

	$NQuery = "SELECT * from volunteer Where roll_no = '$roll_no' && password = '$password' && status = '$status'";
	$Ndata = mysqli_query($conn, $NQuery);
	$Ntotal = mysqli_num_rows($Ndata);
	$Nresult = mysqli_fetch_assoc($Ndata);

	if($Ntotal == 1)
	{
		$_SESSION['roll_no'] = $roll_no;	
		header('location: Dashboard Val.php');
	}
	else
	{
		$Query = "SELECT * from DONOR Where roll_no = '$roll_no' && password = '$password'";
		$data = mysqli_query($conn, $Query);
		$total = mysqli_num_rows($data);
		$result = mysqli_fetch_assoc($data);

		if($total == 1)
		{
			$_SESSION['roll_no'] = $roll_no;	
			header('location: Dashboard Donor.php');
		}
		else
		{
			//die("Not Connected Because ".mysqli_connect_errno());
			echo ("You Are Not Registered");
			echo ("You Are Not Approved by Administrator");
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
