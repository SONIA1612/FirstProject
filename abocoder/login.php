<?php require 'header.php';?>

<?php
if(isset($_POST['login_form'])){
//geting user datas 
	$username = $_POST['uname'];
	$password = $_POST['pword'];

$sql = "SELECT * FROM profile WHERE username='$username' AND password='$password' ";
$res = $conn->query($sql);

while ($rows = $res->fetch_assoc()) {
	$id = $rows['ID'];
}

//checking if user data match
	if (!mysqli_num_rows($res) > 0) {
		echo "<script>alert('Incorrect Login Details ')</script>";
	}else{



$_SESSION['user_loged_in'] =$id;
$user_id = $_SESSION['user_loged_in'];

//setting session
	$user_logged_in = $_SESSION['user_loged_in'];

	echo "<script>alert('Access Granted ')</script>";

	echo "<script>window.location.href='profile.php?id=".$id."'</script>";

	

	}

}
?>


<center>
	<div class="container">
		<h3 style="padding:12px;color:white;font-size:3em;">Please login</h3>
		<hr style="border-width: 4px; background:purple;"></hr>
		<br>
	<form action="" method="POST">
		<input type="text" name="uname" placeholder="Enter Username" required=" "  minlength="6" maxlength="30" class="form-control">

		<br>
		<input type="password" name="pword" placeholder="Enter Password" required="" minlength="8" maxlength="20" class="form-control">
		<br>

		<input type="submit" name="login_form" value="Login Account" class="btn btn-primary">
		<br></br>
		
	</form>
	</div>
</center>





<div class="fixed-bottom">
<?php require 'footer.php';?>
</div>