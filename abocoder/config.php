<?php
	// Connecting to Database
	$localhost="localhost";
	$username="root";
	$password="";
	$Database="abocoders";

	$conn=mysqli_connect ($localhost, $username, $password, $Database);

	if($conn ==TRUE){

		//echo " <script>alert('connected succefully ')</script>";

	}else{

		echo " <script>alert('Error,conection Error ')</script>";
	}

	?>