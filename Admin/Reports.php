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
  	<title>Report</title>
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
					<h2 class="heading-section"><strong>Report Dates</strong></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-striped">
							<thead>
						    <tr>
						      <th>Report From</th>
						      <th>Report To</th>
						      <th>Action</th>
						      
						    </tr>
						  </thead>
						  <tbody>	
								<tr>
								  <th ><input type="date" name="from" /></th>
								  <td><input type="date" name="to" /></td>
								  <td><input type="submit" name="submit" value="Report" class="btn btn-success" /></td>
								</tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</form>
		<?php
			if($_POST['submit'])
			{
				$start = $_POST['from'];
				$end = $_POST['to'];

				$query = "SELECT * FROM DONATIONS WHERE date BETWEEN '$start' AND '$end'";
				$Merge = mysqli_query($conn, $query);
				$Total = mysqli_num_rows($Merge);


				if($Total!=0)
				{
			?>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"><strong>Report List</strong></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<h3>Total Donations = <strong><?php echo $Total ?></h3>
						<table class="table table-striped">
							<thead>
						    <tr>
						      <th>ID</th>
						      <th>Valunteer Name</th>
						      <th>Roll No#</th>
						      <th>Donor Name</th>
						      <th>Roll No#</th>
						      <th>Status</th>
						      <th>Action</th>
						    </tr>
						  </thead>
						  <tbody>	
							  <?php
								while($result = mysqli_fetch_assoc($Merge))
								{
							  ?>
								<tr>
								  <th><?php echo $result['id'] ?></th>
								  <th><?php echo $result['val_fname']." ".$result['val_lname'] ?></th>
								  <td><?php echo $result['val_rollno'] ?></td>
								  <th><?php echo $result['donor_fname']." ".$result['donor_lname'] ?></th>
								  <td><?php echo $result['donor_rollno'] ?></td>
								  <th><?php echo $result['status'] ?></th>
								  <td><a href="View Donation.php?id=<?php echo $result['id'] ?>" class="btn btn-warning">Check</a></td>
								</tr>
								</tr>
							  <?php
								}
							}
							else{
								echo("<h3>No Transection in this Range <strong>$start</strong> / <strong>$end</strong></h3>");

							}
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
		</div>
	</section>
	</body>
</html>

