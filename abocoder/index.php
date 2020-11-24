<?php require 'header.php';?>


<!-- Start your project here--> 
  <!--Carousel Wrapper-->
  <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="img/slider1.jpg"
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Light mask</h3>
        <p>First text</p>
      </div>
    </div>
    <div class="carousel-item">
    <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="img/slider2.jpg"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Strong mask</h3>
        <p>Secondary text</p>
      </div>
    </div>
    <div class="carousel-item">
    <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="img/slider3.jpg"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Slight mask</h3>
        <p>Third text</p>
      </div>
    </div>
  </div>
  <!--/.Slides-->


    <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
 <!--/.Carousel Wrapper-->

  <!--info-bar-->
<div class="container" style="padding:12px; background: purple;">
  
  <select name="" style="float:right; padding: 12px;">
    <option value="option1">Student from 2020</option> 
    <option value="option2">Student from 2019</option>
     <option value="option3">Student from 2018</option>
     <option value="option4">Student from 2017</option> 
    <option value="option5">Student from 2016</option>
  </select>
  <h1 style="color:white;"> <i class=" fa fa-users"> </i> Student Profile</h1>
  </div>

  <?php
//getting students from abocoders database
  $sql = "SELECT * FROM profile";
  $result = $conn->query($sql);

//checking if student is greate than 0
  if (!mysqli_num_rows($result) > 0) {
   
    echo "<center><h1 style='margin:2em 2em 2em 2em;color:red;'><i style='color:red;font-size:3em;padding:12px;' class='fas fa-search'></i><br>No Students Found</h1></center>";

  }else{

//printing students from database
    while ($rows = $result->fetch_assoc()) {
      $id = $rows['ID'];
      $full_name = $rows['name'];
      $about_student = $rows['about_student'];
              $profile_image = $rows['profile_image'];

?>

<!--info-bar-->
<a href="profile.php?id=<?php echo $id ?>" class="aa">
  <!--profile list-->
  <div class="container">
    <div class="row">
      <div class="col-sm-12" style="margin-top: 3em;">
        <div class="col-sm-8 pr"style="margin: auto;border:1px solid #ccc; padding:12px;">
          
          <div class="col-sm-12" style="margin-bottom: 1em; margin-top:1em;">
            <div style="">
            <img src="student_profile/<?php echo  $profile_image ?>?<?php echo time() ?>" alt="Profile Pics" style="padding-right:2em; float: left;" width="300" height="200">
            </div>
 
            <div style="padding: 2em;">

                <h1><?php echo $full_name ;?></h1>
                <p><?php echo substr($about_student , 0, 100)  ;?> ... </p>
             </div>
            </div>
            
    
        </div>
      </div>
    </div>
  </div>
  </a>


<?php
    }
  }

  ?>






  <br>
  <br> 
  
  <?php require 'footer.php';?>