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
	$id = $_GET['id'];
	$Query = "SELECT * from Donations where id = '$id' ";
	$data = mysqli_query($conn, $Query);
	$result = mysqli_fetch_assoc($data);
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>View Donation</title>
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

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"><strong>Volunteer Details</strong></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<h3>Donor Information</h3>
						<table class="table table-striped">
							<thead>
						    <tr>
						      <th>Trsn. ID</th>
						      <th>Full Name</th>
						      <th>Roll No#</th>
						      <th>E-Mail</th>
						    </tr>
						  </thead>
						  <tbody>						
								<tr>
								  <td><?php echo $result['id'] ?></td>
								  <th><?php echo $result['donor_fname']." ".$result['donor_lname'] ?></th>
								  <td><?php echo $result['donor_rollno'] ?></td>
								  <td><?php echo $result['donor_email'] ?></td>  
							    </tr>
						  </tbody>
						</table>
						<br>
						<h3>Valunteer Information</h3>
						<table class="table table-striped">
							<thead>
						    <tr>
						      <th>Full Name</th>
						      <th>Roll No#</th>
						      <th>E-Mail</th>
						      <th>Degree</th>
						      <th>Department</th>
						    </tr>
						  </thead>
						  <tbody>						
								<tr>
								  <th ><?php echo $result['val_fname']." ".$result['val_lname'] ?></th>
								  <td><?php echo $result['val_rollno'] ?></td>
								  <td><?php echo $result['val_email'] ?></td>
								  <td><?php echo $result['val_degree'] ?></td>
								  <td><?php echo $result['val_dept'] ?></td>
								</tr>
						  </tbody>
						</table>
						<br>
						<h3>Donation Record</h3>
						<table class="table table-striped">
							<thead>
						    <tr>
						      <th>Payment Method</th>
						      <th>Amount</th>
						      <th>Status</th>
						      <th>Date / Time</th>
						    </tr>
						  </thead>
						  <tbody>						
								<tr>
								  <td><?php echo $result['payment'] ?></td>
								  <td><?php echo $result['amount'] ?></td>
								  <th><?php echo $result['status'] ?></th>
								  <td><?php echo $result['date'] ?></td>
								</tr>
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

