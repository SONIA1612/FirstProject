<?php
// connecting databaseb and require it from config.php

//checking if user clicked submit button
if(isset($_POST['submit_form'])){

	//Getting what user has typed
	$user_name_input =$_POST['uname'];
	$user_pass_input =$_POST['pword'];


	//Getting data from database table named ::::login
	$sql = "SELECT * FROM login";
	$query = $conn->query($sql);

	while ($rows = $query->fetch_assoc()) {

		$user_name_db = $rows['username'];
		$user_pass_db = $rows['password'];

		// validating user inputs
		if ($user_name_input === $user_name_db && $user_pass_input === $user_pass_db){

			echo "<script>alert('Logged In Sucessful !!!')</script>";
			echo "<h1 style='padding:12px;background:green;color:white;'> Logged In Successful (: </h1>";

		}else{
			echo "<h1 style='padding:12px;background:red;color:white;'> Invalid Username/Password (: </h1>";
			//echo "From Database ".$user_name_db ." ". $user_pass_db ."<br" ;
			//echo "From UserInput ".$user_pass_input ." ". $user_pass_input;
		}

		} //End of while loop

	
	}
	
?>