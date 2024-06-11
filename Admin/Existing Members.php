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
	$Query = "SELECT * from ADMIN";
	$data = mysqli_query($conn, $Query);
	$row = mysqli_num_rows($data);
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Admin List</title>
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

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"><strong>Admin List</strong></h2>
				</div>
			</div>
			<form method="get">
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<h3>Members Information <strong>(<?php echo $row ?>)</strong></h3>
						<table class="table table-striped">
							<thead>
						    <tr>
						      <th>Full Name</th>
						      <th>E-Mail</th>
						      <th>Type</th>
						      <th>Gender</th>
						      <th>Contact</th>
						      <th>Campus</th>
						      <th>Action</th>
						    </tr>
						  </thead>
						  <tbody>		
							  <?php
							  		while($result = mysqli_fetch_assoc($data))
									{
							  ?>
								<tr>
								  <th ><?php echo $result['name']; ?></th>
								  <td><?php echo $result['email'] ?></td>
								  <td><?php echo $result['type'] ?></td>
								  <td><?php echo $result['gender'] ?></td>
								  <td><?php echo $result['contact'] ?></td>
								  <td><?php echo $result['address'] ?></td>
								  <td><a href="Existing Members.php?del=<?php echo $result['email'] ?>"><input type="button" class="btn btn-danger" value="Delete" /></a></td>
								</tr>
							  <?php
									}
								  ?>
						  </tbody>
						</table>
						<br><br>
						<center><button class="btn btn-danger" onclick="goBack()" >Back</button></center>
						<br><br>
					</div>
				</div>
			</div>
			</form>
		</div>
	</section>
	</body>
</html>

<?php
	if(isset($_GET['del']))
	{	
		$email= $_GET['del'];

		$Query_Del = "DELETE FROM ADMIN WHERE email = '$email'";
		$Data_Del = mysqli_query($conn, $Query_Del);

		if($Data_Del)
		{
			echo ("<script>confirm('Do You Want to Delete this $email')</script><script>alert('$email Deleted')</script>");
		}
		else
		{
			echo ("<script>alert('$email Not Deleted')</script>");
		}
	}
?>