<?php require 'config.php';

//starting user session
  session_start();

//checking if user has loged in
  if (isset($_SESSION['user_loged_in'])) {
    
       // echo "<script>alert('User has loged in')</script>";
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Abocoder students online profiles</title>
  <!-- MDB icon -->
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">

  <style type="text/css">

    .aa,.pr{
      color:black;
    }

      .aa,.pr:hover{
      color:red;
      background: #eee;
    }
     .aa,.pr:active{
      color:white;
      background: gray;
    }


    
  </style>
</head>
<body style=" background: #dda0dd;">
<!--Header-->
  <!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark"  style="background:purple;">
  <a class="navbar-brand" href="index.php">
    <b style="border-left:6px solid gold;border-right:6px solid gold;padding: 16px;background:#222;color:white;">ABOCODERS</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item active">
        <a class="nav-link" href="index.php">
           Home</a>
          <span class="sr-only">(current)</span>
        </a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="profile.php?id=<?php echo $_SESSION['user_loged_in'] ?>">
          Profile</a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="logout.php">
          Log Out</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="about.php">
          About</a>
      </li>

    </ul>
  </div>
</nav>
   <!--/.Navbar -->




<?php
  }else{
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Abocoder students online profiles</title>
  <!-- MDB icon -->
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">

  <style type="text/css">

    .aa,.pr{
      color:black;
    }

      .aa,.pr:hover{
      color:red;
      background: #eee;
    }
     .aa,.pr:active{
      color:white;
      background: gray;
    }


    
  </style>
</head>
<body style=" background: #dda0dd;">
<!--Header-->
  <!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark"  style="background:purple;">
  <a class="navbar-brand" href="index.php">
    <b style="border-left:6px solid gold;border-right:6px solid gold;padding: 16px;background:#222;color:white;">ABOCODERS</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item active">
        <a class="nav-link" href="index.php">
           Home</a>
          <span class="sr-only">(current)</span>
        </a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="sign up.php">
          Sign Up</a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="login.php">
          Log In</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="about.php">
          About</a>
      </li>

    </ul>
  </div>
</nav>
   <!--/.Navbar -->



<?php
  }

?>



<!--Header-->