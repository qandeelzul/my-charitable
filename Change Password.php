<?php
session_start();
include("connection.php");

$roll_no = $_SESSION['roll_no'];
	if($roll_no == true)
	{
		
	}
	else
	{
		header('location: Login.php');
	}


if (count($_POST) > 0) 
{
    $result = mysqli_query($conn, "SELECT * from VOLUNTEER WHERE roll_no = '" . $_SESSION["roll_no"] . "'");
    $data = mysqli_fetch_array($result);
	
    if ($_POST["currentPassword"] == $data["password"]) 
	{
        mysqli_query($conn, "UPDATE VOLUNTEER set password='" . $_POST["newPassword"] . "' WHERE roll_no='" . $_SESSION["roll_no"] . "'");
        echo "Your Password Changed Successfully";
    } 
	else
	{
		$result = mysqli_query($conn, "SELECT * from DONOR WHERE roll_no ='" . $_SESSION["roll_no"] . "'");
		$data = mysqli_fetch_array($result);

		if ($_POST["currentPassword"] == $data["password"]) 
		{
			mysqli_query($conn, "UPDATE DONOR set password='" . $_POST["newPassword"] . "' WHERE roll_no ='" . $_SESSION["roll_no"] . "'");
			echo "Your Password Changed Successfully";
		} 
		else
			echo "Current Password is not Correct";
	}
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Change Password</title>

<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
	currentPassword.focus();
	document.getElementById("currentPassword").innerHTML = "required";
	output = false;
}
else if(!newPassword.value) {
	newPassword.focus();
	document.getElementById("newPassword").innerHTML = "required";
	output = false;
}
else if(!confirmPassword.value) 
{
	confirmPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "required";
	output = false;
}
if(newPassword.value != confirmPassword.value) {
	newPassword.value="";
	confirmPassword.value="";
	newPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "Your New Password and Confirm Password Not Same";
	output = false;
	
} 	
return output;
}
</script>
	<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #ff9000;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>

<body>
	<br><br><br>
	<div class="limiter">
		<div class="container-">
			<div class="wrap-">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" name="frmChange" method="post" action="" onSubmit="return validatePassword()">
					<span class="login100-form-title">
						<center><h1 style="color: #ff9000;">Change Password</h1></center>
					</span>
					<br><br><br>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input type="password" name="currentPassword" placeholder="Current Password" class="input100" required/><span id="currentPassword" class="required"></span>
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-16" >
						<input type="password" name="newPassword" class="input100" id="newPassword" placeholder="New Password" required/><span id="newPassword" class="required"></span>
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input" >
						<input type="password" name="confirmPassword" class="input100" placeholder="Confirm Password" required/><span id="confirmPassword" class="required"></span>
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" value="submit" type="submit" name="submit">
								Change Password
							</button>
						</div>
					</div>
					<br><br><br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" onClick="goBack()">
								Back
							</button>
						</div>
					</div>
				</form>
			</div>
			
		</div>
	</div>
<script>

function goBack() {
  window.history.back();
}
</script>

	
</body>
</html>
