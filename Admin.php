<?php
session_start();
include("Connection.php");

$email = $_SESSION['email'];
	if($email == true)
	{
		
	}
	else
	{
		header('location: Login.php');
	}
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="Assets/Main/CSS/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="Assets/Form/CSS/Table.css">

	  <script>
function goBack() {
  window.history.back();
}
</script>
	  
</head>
<body>

<!--Header_section-->
<header id="header_outer">
  <div class="container">
    <div class="header_section">
      <div class="logo"><a href="Dashboard.php"><p style="font-size: 38px; color: #ff9000;">CharitAble</p></a></div>
      <nav class="nav" id="nav">
        <ul class="">
          <li><a href="Admin.php">Admin</a></li>
          <li><a href="Approval.php">Approvals</a></li>
          <li><a href="Users.php">Users</a></li>
          <li><a href="Donations.php">Donations</a></li>
          <li><a href="Reports.php">Reports</a></li>
          <li><a href="Complain.php">Complain Box</a></li>
          <li><a href="Logout.php">Logout</a></li>
        </ul>
      </nav>
      <a class="res-nav_click animated wobble wow"  href="javascript:void(0)"><i class="fa-bars"></i></a> </div>
  </div>
</header>
<!--Header_section--> 

	<form method="post" >
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"><strong>Admin Panal</strong></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-striped">
							<thead>
						    <tr>
						      <th>Add New Admin Member</th>
						      <th>Check Existing Member</th>
						      
						    </tr>
						  </thead>
						  <tbody>	
								<tr>
								  <th><a href="Admin Signup.php"><input type="button" value="Addition" class="btn btn-success" /></a></th>
								  <td><a href="Existing Members.php"><input type="button" value="Existing" class="btn btn-warning" /></a></td>
								</tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</form>
	</body>
</html>

