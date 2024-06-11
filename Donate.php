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

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Donation Form</title>

    <!-- Main css -->
    <link rel="stylesheet" href="Assets/Form/CSS/Req & Don.css">
	<script>

var slider = document.getElementById("myRange");
		var output = document.getElementById("demo");
		output.innerHTML = slider.value;

		slider.oninput = function() 
		{
		  output.innerHTML = this.value;
		}</script>
</head>
<body>
	<form method="post">  
		<div class="select-list">
			<div class="label-flex">
				<label for="meal_preference"></label>
				Choose Roll No of Volunteer
			</div>
				<select  name="meal_preference" id="meal_preference"  >
					<option value="">Requested Roll No# List</option>

					<?php
						$records = mysqli_query($conn, "SELECT roll_no From REQUEST");  

						while($data = mysqli_fetch_array($records))
						{
							echo "<option value='".$data['roll_no']."'>" .$data['roll_no']."</option>";  
						}
						$user = $data['roll_no'];
					?>
				</select>
			</div>
		
			<input type="text" name="roll_no" placeholder="Re-Type Selected Roll No#" required/><br>

			<div class="form-row-last">
				<input type="submit" name="search"  id="submit" value="Fetch Information">
			</div><br>
						
		</form>
<div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="form-img.jpg" alt="">
                    <div class="signup-img-content">
                        <h2>Help Now </h2>
                        <p>while seats are available !</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
						
								<?php
									if(isset($_POST['search']))
									{
										$roll_no = $_POST['roll_no'];

										$R_Query = "SELECT * FROM REQUEST WHERE roll_no = $roll_no ";
										$Query_run = mysqli_query($conn, $R_Query);

										while($row = mysqli_fetch_array($Query_run))
										{
								?>
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" >First name</label>
                                    <input type="text" name="first_name" id="first_name" value="<?php echo $row['first_name'] ?>" readonly />
                                </div>
                                <div class="form-input">
                                    <label for="payable">Roll No#</label>
                                    <input type="text" name="roll_no" id="payable" value="<?php echo $row['roll_no'] ?>" readonly />
                                </div>
								<div class="form-input">
                                    <label for="phone_number" class="required">Current Degree</label>
                                    <input type="text" name="degree" id="phone_number" value="<?php echo $row['degree'] ?>" readonly />
                                </div>
								
								<div class="form-input">
                                    <label for="payable">Amount to be Need</label>
                                    <input type="text" name="dept" id="payable" value="<?php echo $row['amount'] ?>" />
                                </div>
								
                            </div>
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="last_name" >Last name</label>
                                    <input type="text" name="last_name" id="last_name" value="<?php echo $row['last_name'] ?>" readonly />
                                </div>
                                <div class="form-input">
                                    <label for="email" >Email</label>
                                    <input type="text" name="email" id="email" value="<?php echo $row['email'] ?>" readonly />
                                </div>
                                
                                <div class="form-input">
                                    <label for="payable">Department</label>
                                    <input type="text" name="dept" id="payable" value="<?php echo $row['dept'] ?>" />
                                </div>
								<div class="form-radio">
                                    <div class="label-flex">
                                        <label for="payment">Payment Mode</label>
                                        <a href="#" class="form-link">Payment Detail</a>
                                    </div>
                                    <div class="form-radio-group">            
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="cash" checked>
                                            <label for="cash">Cash</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="cheque">
                                            <label for="cheque">Cheque</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="demand">
                                            <label for="demand">Demand Draf</label>
                                            <span class="check"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<div class="form-input">
                                    <label for="chequeno" >Message</label>
							  <textarea style="width: 815px; height: 150px;" name="msg" readonly><?php echo $row['msg'] ?></textarea>
                                </div>
                        <div class="slidecontainer">
							  <input type="range" min="100" max="10000" name="amount" value="<?php echo $row['amount'] ?>" class="slider" id="myRange">
							  <h3>Donation: Rs. <span id="demo"></span></h3>
						</div>
						
                        <div class="form-submit">
                            <input type="submit" value="Donate Now" class="submit" id="submit" name="submit" />
							<?php
										}
									}
							
								?>
                            <a href="Dashboard Donor.php" ><input type="button" value="Home" class="submit" id="reset" /></a>
                        </div>
						
                    </form>
                </div>
            </div>
        </div>

    </div>

<script>
	var slider = document.getElementById("myRange");
	var output = document.getElementById("demo");
	output.innerHTML = slider.value;

	slider.oninput = function() 
	{
	  output.innerHTML = this.value;
	}
</script>
	<!-- JS -->
    <script src="Assets/Form/JS/Donate JS/jquery.min.js"></script>
    <script src="Assets/Form/JS/Donate JS/wnumb/wNumb.js"></script>
    <script src="Assets/Form/JS/Donate JS/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="Assets/Form/JS/Donate JS/main.js"></script>
	
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

<?php

include("Connection.php");

if($_POST['submit'])
{
	$id = rand();
	$dfname = $result['first_name'];
	$dlname = $result['last_name'];
	$droll = $result['roll_no'];
	$demail = $result['email'];
	$fname = $_POST['first_name'];
	$lname = $_POST['last_name'];
	$roll = $_POST['roll_no'];
	$email = $_POST['email'];
	$degree = $_POST['degree'];
	$dept = $_POST['dept'];
	$payment = $_POST['payment'];
	$amount = $_POST['amount'];
	$status = "Pendding from Volunteer";

	if($id !="" && $dfname!="" && $dlname!="" && $droll!="" && $demail!="" && $fname!="" && $lname!="" && $roll!="" && $email!="" && $degree!="" && $dept!="" && $payment!="" && $amount!="" && $status!="")
	{
		$Query = "INSERT into DONATIONS Value ('$id', '$dfname', '$dlname', '$droll', '$demail', '$fname', '$lname', '$roll', '$email', '$degree', '$dept', '$payment', '$amount', '$status', now())";
		$Data = mysqli_query($conn, $Query);

		if($Data)
		{
			echo ("<h1>Jazak Allah You Donated Rs. <b>".$amount."</b> to <b>".$fname." ".$lname." ($roll) "."</b>..! <br>Your Donation No# <b> $id </b> <br></h1>");
			
			$Del_Query = "Delete FROM REQUEST Where roll_no = '$roll_no'";
			$Del_Data = mysqli_query($conn, $Del_Query);
		}
		else
		{
			echo ("<h1>Failed</h1>");
		}
	}
}
?>