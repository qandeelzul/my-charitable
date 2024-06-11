<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$DBname = "charitable";

	$conn = mysqli_connect($servername, $username, $password, $DBname);
		if($conn)
		{
			//echo ("Connected Successfully..!");
			error_reporting(0);
		}
		else
		{
			die("Not Connected Because ".mysqli_connect_errno());
		}
?>