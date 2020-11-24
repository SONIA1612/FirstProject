<?php require 'header.php';

 //checking if id was set by user
 if (isset($_GET['id'])) {
  
  //getting info from db
  $sql = "SELECT * FROM profile WHERE id ='".$_GET['id']."' ";
  $res = $conn->query($sql); 

  //get info 
  while ($rows = $res->fetch_assoc()) {

        $fname = $rows['name'];
        $age = $rows['age'];
        $email = $rows['email'];
        $phone_number = $rows['phone_number'];
        $gender = $rows['gender'];
        $marital_status = $rows['marital_status'];
        $date_of_birth = $rows['date_of_birth'];
        $nationality = $rows['nationality'];
        $place_of_birth = $rows['place_of_birth'];
        $present_resident = $rows['present_resident'];
        $state_of_origin = $rows['state_of_origin'];
        $educztional_status = $rows['educational_status'];
        $religion = $rows['religion'];
        $skills = $rows['skills'];
        $about_student = $rows['about_student'];
        $hobby = $rows['hobby'];
        $profile_image = $rows['profile_image'];

?>


<div class="container">
  <div class="rows">
    <div class="col-sm-12">
      <!-- Card -->
<div class="card testimonial-card">

  <!-- Background color -->
  <div class="card-up indigo lighten-1"></div>

  <!-- Avatar -->
  <div class="avatar mx-auto white">
    <img src="student_profile/<?php echo  $profile_image ?>?<?php echo time() ?>" class="rounded-circle"
      alt="woman avatar" height="300" width="300">
  </div>

  <!-- Content -->
  <center>
  <div class="card-body">
    <!-- Name -->
    <h4 class="card-title"><?php echo $fname?></h4>
    <hr>
    <!-- Quotation -->
    <p><i class="fas fa-quote-left"></i> <?php echo $about_student ?>
    </p>
    </center>
  </div>

</div>
<!-- Card -->
      
    </div>
  </div>
</div>


<div class="container" style="background: white;margin-bottom: auto;border-radius: 30px;-webkit-border-radius:30px;-o-border-radius:30px;-moz-border-radius:30px; box-shadow: 4px 4px 50px #ddd;">
 
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" style="background: #ddd;">
    <a style="color: purple;"class="nav-link" class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
      aria-selected="true"> <i class="fas fa-user pr-2"></i>Personal</a>
  </li>

</ul>

<div class="container" style="background: white;padding-bottom: 1em;">
  <div class="rows">
    <div class="col-sm-12">
      
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <h3 style="padding:12px;">Personal Profile</h3>
        <!--table-->
<table  class="table table-responsive table-hover table-striped table-bordered"  style=" border-radius: 30px;-webkit-border-radius:30px;-o-border-radius:30px;-moz-border-radius:30px; border-top:12px solid purple;box-shadow: 4px 4px 50px #ddd;">
  <thead class="black white-text">
    <tr>
      <td>Name</td>
      <td>Age</td>
      <td>Email</td>
      <td>Phone number</td>
      <td>Gender</td>
      <td>Marital status</td>
      <td>Date of birth</td>
      <td>Nationality</td>
      <td>Place of birth</td>
      <td>Present resident</td>
      <td>State of origin</td>
      <td>Educationa status</td>
      <td>Religen</td>
      <td>Skills</td>
      <td>About_Student</td>
      <td>Hobby</td>
      

    </tr>
  </thead>

  <tbody>
    <tr>
    <td><?php echo $fname ?></td>
    <td><?php echo $age ?></td>
    <td><?php echo $email ?></td>
    <td><?php echo $phone_number ?></td>
    <td><?php echo $gender ?></td>
    <td><?php echo $marital_status ?></td>
    <td><?php echo $date_of_birth ?></td>
    <td><?php echo $nationality ?></td>
    <td><?php echo $place_of_birth ?></td>
    <td><?php echo $present_resident ?></td>
    <td><?php echo $state_of_origin ?></td>
    <td><?php echo $educztional_status ?></td>
    <td><?php echo $religion ?></td>
    <td><?php echo $skills ?></td>
    <td><?php echo $about_student ?></td>
    <td><?php echo $hobby ?></td>
  </tr>
  </tbody>
  
</table>
<!--table-->
</div>

</div>
    </div>
  </div>
</div>
</div>
<?php
  }//end of while loop
 }else{

  echo "<script>alert('Access Denied ')</script>";
  echo "<script>window.location.href='login.php'</script>";
 }
?>



<?php require 'footer.php';?>