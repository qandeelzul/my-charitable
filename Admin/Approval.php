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
	$Query = "SELECT * from ADMIN where email = '$email'";
	$data = mysqli_query($conn, $Query);
	$result = mysqli_fetch_assoc($data);
	
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Approvals</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="Assets/Main/CSS/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="Assets/Form/CSS/Table.css">

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
					<h2 class="heading-section"><strong>New Volunteer Approvals</strong></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-striped">
						  <thead>
						    <tr>
						      <th>Full Name</th>
						      <th>Roll No#</th>
						      <th>Degree</th>
						      <th>Campus</th>
						      <th>Status</th>
						      <th rowspan="3"><strong>Action</strong></th>
						      <th></th>
						      <th></th>
						    </tr>
						  </thead>
						  <tbody>
							  <?php
								$Query = "SELECT * From VOLUNTEER WHERE status = 'Un-Registered'";
								$Merge = mysqli_query($conn, $Query);
								$Total = mysqli_num_rows($Merge);
								if($Total != 0)
								{
									while($data = mysqli_fetch_assoc($Merge))
										{
								?>
									<tr>
									  <th ><?php echo $data['first_name']." ".$data['last_name'] ?></th>
									  <td><?php echo $data['roll_no'] ?></td>
									  <td><?php echo $data['degree'] ?></td>
									  <td><?php echo $data['campus'] ?></td>
									  <th><?php echo $data['status'] ?></th>
									  <td><a href="View Approval.php?roll=<?php echo $data['roll_no'] ?>" class="btn btn-warning">Check</a></td>
									  <td><a href="Approval.php?approve=<?php echo $data['roll_no']; ?>" class="btn btn-success">Approve</a></td>
									  <td><a href="Pending Val.php?del=<?php echo $data['roll_no']; ?>" class="btn btn-danger">Reject</a></td>
									</tr>
							<?php
										}
								}
							
							else
							{
							echo ("<h1>No More New Volunteer</h1>");
							}
							  ?>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	</body>
</html>

<?php
					//------------------------------------------------------------------------------------------------	
					if(isset($_GET['approve']))
					{
						$rollno= $_GET['approve'];
						$Query_Up="UPDATE VOLUNTEER SET status = 'Registered' where roll_no = $rollno";
						$data_up = mysqli_query($conn, $Query_Up);
						if($data_up)
						{
							echo ("<br><h2><b>User Registered</b></h2>");
						}
						else
						{
							echo ("Oops..!	Approved Error..!");
						}
					}
					//------------------------------------------------------------------------------------------------
					if(isset($_GET['del']))
					{	
						$rollno= $_GET['del'];
						$Query_Del="DELETE From VOLUNTEER where roll_no = $rollno";
						$data_Del = mysqli_query($conn, $Query_Del);
						if($data_Del)
						{
							echo ("Record Deleted");
						}
						else
						{
							echo ("Record Not Deleted");
						}
					}
					//------------------------------------------------------------------------------------------------
				?>