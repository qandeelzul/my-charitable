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
    <title>Request Form</title>

    <!-- Main css -->
    <link rel="stylesheet" href="Assets/Form/CSS/Req & Don.css">
	
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="form-img.jpg" alt="">
                    <div class="signup-img-content">
                        <h2>Request Now </h2>
                        <p>Fulfil Your Need</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name">First name</label>
                                    <input type="text" name="first_name" id="first_name" value="<?php echo $result['first_name']; ?>" readonly />
                                </div>
                                <div class="form-input">
                                    <label for="last_name" >Roll No#</label>
                                    <input type="text" name="roll_no" id="last_name" value="<?php echo $result['roll_no']; ?>" readonly />
                                </div>
                                <div class="form-input">
                                    <label for="company" > Current Degree</label>
                                    <input type="text" name="degree" id="company" value="<?php echo $result['degree']; ?>" readonly />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" >Last name</label>
                                    <input type="text" name="last_name" id="first_name" value="<?php echo $result['last_name']; ?>" readonly />
                                </div>
                                <div class="form-input">
                                    <label for="company" >UOG Email</label>
                                    <input type="text" name="email" id="company" value="<?php echo $result['email']; ?>" readonly />
                                </div>
                                <div class="form-input">
                                    <label for="chequeno">Department</label>
                                    <input type="text" name="dept" id="chequeno" value="<?php echo $result['dept']; ?>" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="slidecontainer">
							  <label for="chequeno" class="required">Message</label>
							  <textarea style="width: 815px; height: 220px;" name="msg" placeholder="Write Your Message Here..!" required></textarea>
						</div>
						
						<div class="slidecontainer">
							  <input type="range" min="100" max="10000" name="amount" value="500" class="slider" id="myRange">
							  <h3>Amount Need: Rs. <span id="demo"></span></h3>
						</div>
						
                        <div class="form-submit">
                            <input type="submit" value="Request Now" class="submit" id="submit" name="submit" />
                            <a href="Dashboard Val.php" ><input type="button" value="Home" class="submit" id="reset"/></a>
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
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

<?php

include("Connection.php");

if($_POST['submit'])
{
	$fname = $_POST['first_name'];
	$lname = $_POST['last_name'];
	$roll = $_POST['roll_no'];
	$email = $_POST['email'];
	$degree = $_POST['degree'];
	$dept = $_POST['dept'];
	$msg = $_POST['msg'];
	$amount = $_POST['amount'];

	if($fname!="" && $lname!="" && $roll!="" && $email!="" && $degree!="" && $dept!="" && $msg!="" && $amount!="")
	{
		$Query = "INSERT into Request Value ('$fname', '$lname', '$roll', '$email', '$degree', '$dept', '$msg', '$amount')";
		$Data = mysqli_query($conn, $Query);

		if($Data)
		{
			echo ("<h1>\"$fname $lname\" Your Request Has Been Placed with Your Roll No#: \"$roll\" for Rs. $amount.</h1>");
		}
		else
		{
			echo ("<h1>\"$fname $lname\" Your Request Already Placed with Your Roll No#: \"$roll\".</h1>");
		}
	}
}

?>