<?php
//session start
	session_start();


//if user has loged out redirect them to home page
if (session_destroy()) {
	
	header("location: index.php");	

}



/*
//checking if user has loged in
  if (isset($_SESSION['user_loged_in'])) {
    
      //echo "<script>alert('User has loged in')</script>";



 }else{


     // echo "<script>alert('User is not loged in')</script>";


 }*/



?>