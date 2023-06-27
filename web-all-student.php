<?php
    require_once('functions/function.php');
    $select="SELECT * FROM room ORDER BY room_id DESC";
    $Q=mysqli_query($con,$select);
    // $Query=mysqli_fetch_assoc($Q);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="websites-assets/css/navbar-fixed.css">
  <link rel="stylesheet" href="websites-assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="websites-assets/css/bootstrap.css">
  <link rel="stylesheet" href="websites-assets/css/style.css">
  <link rel="shortcut icon" type="image/x-icon" href="websites-assets/img/mlogo.png">
  <title>Hall</title>




</head>

<body>
  <nav class="navbar navbar-light navbar-expand-lg py-3 fixed-top">
    <div class="container">
      <a href="#showcase" class="navbar-brand">
        <img src="websites-assets/img/mlogo.png" class="img-fluid" width="50" height="50" alt="M">
        <h3 class="d-inline align-middle"></h3>
      </a>
      <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php#showcase">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#authors">Authors</a>
          </li>
		      <li class="nav-item">
            <a class="nav-link" href="web-all-room.php">ROOM Details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="web-all-student.php">Student</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="web-all-department.php">Department</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php#contact">Contact</a>
          
        </li>
          <li class="nav-item">
        
              <a class="nav-link" href="login.php">Log In</a>
          </li>

        </ul>


    </div>
    </div>
  
</nav>

<br>

<hr>

  <div class="container">

        <form method="get" action="web-details-student.php">
    
          <h1 class="text-center text-primary"><b><input name="sid" type="text" required><br><button type="submit" class="btn btn-danger btn-lg">Search</button></b></h1> 
      
      
        </form>      
        
              <hr>
              
              
              <div class="row">

                </div>
      
              </div>
        </div>

<br>


  <!-- FOOTER -->

  <footer id="footer-main" class="py-5 bg-primary text-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <p class="lead">Copyright © 2022.</p>
          <span class="lead">Designed By: <a class="text-light" href="https://www.facebook.com/ridoy.ajahar?mibextid=ZbWKwL" target="_blank">AZAHARUL ISLAM</a></span>
        </div>
      </div>
    </div>
  </footer>
  <!-- JS SCRIPT -->
  <script src="websites-assets/js/jquery.min.js"></script>
  <script src="websites-assets/js/popper.min.js"></script>
  <script src="websites-assets/js/bootstrap.min.js"></script>
  <script src="websites-assets/js/navbar-fixed.js"></script>


</body>

</html>



