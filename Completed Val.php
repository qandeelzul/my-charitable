<?php
session_start();
include("Connection.php");

$roll_no = $_SESSION['roll_no'];
	if($roll_no == true)
	{
		
	}
	else
	{
		header('location: Login.php');
	}
	$Query = "SELECT * from volunteer where roll_no = '$roll_no'";
	$data = mysqli_query($conn, $Query);
	$result = mysqli_fetch_assoc($data);
	
	
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Pending Donations</title>
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
      <div class="logo"><a href="Dashboard Val.php"><p style="font-size: 38px; color: #ff9000;">CharitAble</p></a></div>
      <nav class="nav" id="nav">
        <ul class="">
          <li><a href="Dashboard Val.php">Home</a></li>
          <li><a href="Request.php">Request Now</a></li>
          <li><a href="Pending Val.php">Pending</a></li>
          <li><a href="Completed Val.php">Completed</a></li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">Change Password</a></li>
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
					<h2 class="heading-section"><strong>Completed Transections</strong></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-striped">
						  <thead>
						    <tr>
						      <th>ID</th>
						      <th>Volunteer Name</th>
						      <th>Roll No#</th>
						      <th>E-Mail</th>
						      <th>Amount</th>
						      <th>Status</th>
						      <th rowspan="2"><strong>Action</strong></th>
						      <th></th>
						    </tr>
						  </thead>
						  <tbody>
							  <?php
								$user_roll = $result['roll_no'];
								$User_status = "Completed from Volunteer";
								$Query = "SELECT * From Donations Where donor_rollno = $user_roll && status = '$User_status'";
								$Merge = mysqli_query($conn, $Query);
								$Total = mysqli_num_rows($Merge);
								if($Total != 0)
								{
									while($data = mysqli_fetch_assoc($Merge))
										{
								?>
									<tr>
									  <td scope="row"><?php echo $data['id'] ?></td>
									  <th ><?php echo $data['donor_fname']." ".$data['donor_lname'] ?></th>
									  <td><?php echo $data['donor_rollno'] ?></td>
									  <td><?php echo $data['donor_email'] ?></td>
									  <td><?php echo $data['amount'] ?></td>
									  <th><?php echo $data['status'] ?></th>
									  <td><a href="#" class="btn btn-success">Check</a></td>
									  <td><a href="Completed Val.php?del=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a></td>
									</tr>
<?php
										}
								}
							
							else
							{
							echo ("<h1> No Donation so for From Your Account</h1>");
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
if(isset($_GET['del']))
{	
	$idd= $_GET['del'];
	$Query_Del="DELETE From donations where id=$idd";
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