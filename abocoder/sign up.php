<?php require 'header.php';
//checking if user clicked submit
	if (isset($_POST['signup_form'])) {

//collecting all the input 
	$full_name = $_POST['fname'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$phone_number = $_POST['phone'];
	$gender = $_POST['gender'];
	$marital_status = $_POST['marital_status'];
	$birth = $_POST['birth'];
	$nationality = $_POST['nationality'];
	$place_of_birth = $_POST['place_of_birth'];
	$present_resident = $_POST['present_resident'];
	$state_of_origin = $_POST['state_of_origin'];
	$educational_status = $_POST['educational_status'];
	$religion = $_POST['religion'];
	$skills = $_POST['skills'];
	$about_student = $_POST['about_student'];
	$hobby = $_POST['hobby'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $profile_photo_name = $_FILES['profile_photo']['name'];
    $profile_photo_tmp_name = $_FILES['profile_photo']['tmp_name'];
    $allowed_photo = pathinfo($profile_photo_name, PATHINFO_EXTENSION);

//checking if image is supported
    if ($allowed_photo != "jpg" && $allowed_photo != "JPEG" && $allowed_photo != "png" && $allowed_photo != "PNG") {
   
    	echo "<script>alert('Image Not Supported')</script>";

    }else{
//move image to user profile
    if (!move_uploaded_file($profile_photo_tmp_name, "student_profile/".$profile_photo_name."")) {
    	    	echo "<script>alert('Image Not Moved')</script>";

    }else{

     //inserting user inputs into abocoders database table named profile
$sql = "INSERT INTO 
profile(name, age, email, phone_number, gender, marital_status, date_of_birth, nationality, place_of_birth, present_resident, state_of_origin, educational_status, religion, skills, about_student, hobby, username, password, profile_image) 

VALUES('$full_name', '$age', '$email', '$phone_number', '$gender', '$marital_status', '$birth', '$nationality', '$place_of_birth', '$present_resident', '$state_of_origin', '$educational_status', '$religion', '$skills', '$about_student', '$hobby', '$username', '$password', '$profile_photo_name')";

$result= $conn->query($sql);
//checking if data was inserted successfully	
if ($result) {

	echo "<script>alert('Registration Was Successful')</script>";

	echo "<script>window.location.href='login.php'</script>";

}else{

	echo "Error 101 Found :( ";

}//end if datas was not inserted



    }//end if image was not moved


    }//end if image is not supported



	}//end of form submited
?>
<center>
	<div class="container">
		<h3 style="padding:12px;color:white;font-size:3em;">sign up an account</h3>
		<hr style="border-width: 4px; background:purple;"></hr>
		<br>
	<form action="" method="POST" enctype="multipart/form-data">

		<input type="text" name="fname" placeholder="Enter full Name" required=" "  minlength="6" maxlength="30" class="form-control">

		<br><input type="Number" name="age" placeholder="Age" required=" "  minlength="6" maxlength="30" class="form-control">

		<br><input type="Email" name="email" placeholder="Email" required=" "  minlength="6" maxlength="30" class="form-control">

		<br><input type="Number" name="phone" placeholder="Phone Number" required=" "  minlength="6" maxlength="30" class="form-control">

		<br>
		<select name="gender" class="form-control" required="">
			<option value="male">Male</option>
			<option value="female">Female</option>
		</select>

		<br>
		<select name="marital_status" class="form-control" required="">
			<option value="single">single</option>
			<option value="married">married</option>
		</select>


		<br><input type="Date" name="birth" placeholder="Date of Birth" required=" "  minlength="6" maxlength="30" class="form-control">

		<br>
		<input type="text" name="nationality" placeholder="Nationality" required=" "  minlength="6" maxlength="30" class="form-control">

		<br>
		<input type="text" name="place_of_birth" placeholder="place of Birth" required="" minlength="8" maxlength="20" class="form-control">

		<br>
		<input type="text" name="present_resident" placeholder="present resident" required=" "  minlength="6" maxlength="30" class="form-control">
		<br>
		<input type="text" name="state_of_origin" placeholder="State of origin" required="state of origin "  minlength="6" maxlength="30" class="form-control">
<br>
		<input type="text" name="educational_status" placeholder="Educational status" required=" "  minlength="6" maxlength="30" class="form-control">
<br>
		<input type="text" name="religion" placeholder="Religion" required=" "  minlength="6" maxlength="30" class="form-control">
<br>
		<input type="text" name="skills" placeholder="Skills" required=" "  minlength="6" maxlength="30" class="form-control">
		<br>

		<textarea name="about_student" class="form-control" placeholder="Write about your self ..." required="" rows="7" minlength="100" maxlength="350"></textarea>
		<br>


		<input type="text" name="hobby" placeholder="Hobby" required=" "  minlength="6" maxlength="30" class="form-control"><br>

		<input type="text" name="username" placeholder="Enter Username" required=" "  minlength="8" maxlength="30" class="form-control"><br>

		<input type="password" name="password" placeholder="Set Password" required=" "  minlength="8" maxlength="30" class="form-control"><br>

		<label>Choose Profile Image:</label>
		<input type="file" name="profile_photo" class="form-control">






		<input type="submit" name="signup_form" value="Sign up now" class="btn btn-primary">
		<br></br>
		
	</form>


	</div>
</center>



<?php require 'footer.php';?>
