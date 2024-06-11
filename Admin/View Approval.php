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
	$roll = $_GET['roll'];
	$Query = "SELECT * from volunteer where roll_no = '$roll' ";
	$data = mysqli_query($conn, $Query);
	$result = mysqli_fetch_assoc($data);
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>View Approval</title>
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
						<h3>Personal Information</h3>
						<table class="table table-striped">
							<thead>
						    <tr>
						      <th>Full Name</th>
						      <th>Roll No#</th>
						      <th>E-Mail</th>
						      <th>Gender</th>
						      <th>Contact</th>
						      <th>Campus</th>
						    </tr>
						  </thead>
						  <tbody>						
								<tr>
								  <th ><?php echo $result['first_name']." ".$result['last_name'] ?></th>
								  <td><?php echo $result['roll_no'] ?></td>
								  <td><?php echo $result['email'] ?></td>
								  <td><?php echo $result['gender'] ?></td>
								  <td><?php echo $result['contact'] ?></td>
								  <td><?php echo $result['campus'] ?></td>
								</tr>
						  </tbody>
						</table>
						<br>
						<h3>Educational Record</h3>
						<table class="table table-striped">
							<thead>
						    <tr>
						      <th>Matric In</th>
						      <th>Average Marks</th>
						      <th>Intermediate In</th>
						      <th>Average Marks</th>
						      <th>Current Degree</th>
						      <th>CGPA</th>
						      
						    </tr>
						  </thead>
						  <tbody>						
								<tr>
								  <td><?php echo $result['matric_degree'] ?></td>
								  <td><?php echo $result['matric_avg'] ?></td>
								  <td><?php echo $result['inter_degree'] ?></td>
								  <td><?php echo $result['inter_avg'] ?></td>
								  <td><?php echo $result['degree'] ?></td>
								  <td><?php echo $result['cgpa'] ?></td>
								</tr>
						  </tbody>
						</table>
						<br>
						<h3>Family Details</h3>
						<table class="table table-striped">
							<thead>
						    <tr>
						      <th>Family Members</th>
						      <th>Father Status</th>
						      <th>Total Expenses</th>
						      <th>Monthaly Income</th>
						      <th>Transport / Resident</th>
						      <th>Status</th>
						      
						    </tr>
						  </thead>
						  <tbody>						
								<tr>
								  <td><?php echo $result['members'] ?></td>
								  <td><?php echo $result['father_status'] ?></td>
								  <td><?php echo $exp = $result['family_exp'] + $result['acco_exp'] + $result['utility_exp'] ?></td>
								  <td><?php echo $result['income'] ?></td>
								  <td><?php echo $result['transport']." / ".$result['resident'] ?></td>
								  <th><?php echo $result['status'] ?></th>
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

