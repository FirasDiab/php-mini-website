<?php
session_start();


$multiArray = array(
  array(
      "username" => "Firas",
      "password" => "admin123",
      "role" => "admin"
  ),
  array(
      "username" => "adam",
      "password" => "adam123",
      "role" => "user"
  ),

  array(
      "username" => "mohammad",
      "password" => "mohammad123",
      "role" => "user"
  ),

  array(
      "username" => "hamzah",
      "password" => "hamzah123",
      "role" => "user"
  ),

  array(
      "username" => "guest",
      "password" => "guest123",
      "role" => "user"
  ),


);

$_SESSION['multi'] = $multiArray;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
</head>
<body>

<!--Navbar Start Here-->
<header class="blog-header py-3 bg-light">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
        </div>
        <div class="col-4 text-center">
          <a class="blog-header-logo text-dark" href="index.php" style="text-decoration:none;"><h2>Firas Dashboard</h2></a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          <a class="btn btn-sm btn-outline-secondary mr-2" href="register.php">Sign up</a>
          <a class="btn btn-sm btn-outline-secondary mr-5 " href="login.php">Sign in</a>
        </div>
      </div>
    </header>


<!-- Navbar End Here-->

<!--Slider Start Here-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://s25910.pcdn.co/wp-content/uploads/2019/06/Travel-Jobs-Make-Money-Travelling.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://images.myguide-cdn.com/md/common/large/5cad6a5fa125f-521617.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://travellingbalkans.com/wp-content/uploads/2019/09/DSC_0499-1150x765.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.trafalgar.com/real-word/wp-content/uploads/sites/3/2018/12/feature-image.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- Slider End Here-->
    
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>