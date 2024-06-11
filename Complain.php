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
	$Query = "SELECT * from complain";
	$data = mysqli_query($conn, $Query);
	$row = mysqli_num_rows($data);
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Complain Box</title>
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
					<h2 class="heading-section"><strong>Complain Box</strong></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<h3>Total Complains <strong>(<?php echo $row ?>)</h3>
						<table class="table table-striped">
							<thead>
						    <tr>
						      <th>Complain ID</th>
						      <th>Full Name</th>
						      <th>E-Mail</th>
						      <th>Subject</th>
						      <th>Message</th>
						      <th rowspan="2">Action</th>
						      <th></th>
						    </tr>
						  </thead>
						  <tbody>	
							  <?php
							  		while($result = mysqli_fetch_assoc($data))
									{
							  ?>
								<tr>
								  <th ><?php echo $result['id']; ?></th>
								  <td><?php echo $result['fullname'] ?></td>
								  <td><?php echo $result['email'] ?></td>
								  <td><?php echo $result['subject'] ?></td>
								  <td><?php echo $result['message'] ?></td>
								  <td><a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=new" target="_blank"><input type="button" class="btn btn-success" value="Reply" /></a></td>
								  <td><a href="Complain.php?del=<?php echo $result['id'] ?>"><input type="button" class="btn btn-danger" value="Delete" /></a></td>
								</tr>
							  <?php
									}
							  ?>
							  
						  </tbody>
						</table>
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

<?php
	if(isset($_GET['del']))
	{	
		$id= $_GET['del'];

		$Query_Del="DELETE From COMPLAIN WHERE id = $id";
		$data_Del = mysqli_query($conn, $Query_Del);

		if($data_Del)
		{
			echo ("<script>confirm('Do You Want to Delete this Complain?')</script><script>alert('$id Complain Deleted')</script>");
		}
		else
		{
			echo ("<h3>Complain Not Deleted</h3>");
		}
	}
?>