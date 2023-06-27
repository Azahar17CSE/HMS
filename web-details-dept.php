<?php
    require_once('functions/function.php');
    $department=$_GET['department'];
    
    
    $select11="SELECT * FROM department WHERE department_name='$department'";
    
    $query=mysqli_query($con,$select11);
    $value=mysqli_fetch_assoc($query);
    
    if($value){
      $id=$value['department_id'];  
      
      $select="SELECT * FROM user INNER JOIN room ON user.room_id=room.room_id INNER JOIN department ON user.department_id=department.department_id WHERE user.department_id='$id' ORDER BY user.id DESC";
      $Q=mysqli_query($con,$select);
       
    }


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

  <title>Hall Management</title>


</head>


<body>
  <nav class="navbar navbar-light navbar-expand-lg py-3 fixed-top">

      <div class="container">
 
      <a href="#showcase" class="navbar-brand">
    
        <img src="websites-assets/img/mlogo.png" class="img-fluid" width="50" height="50" alt="M">
        
        <h3 class="d-inline align-middle">Hall</h3>
  
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

<div class="container"> 
    <h1 class="text-center text-primary"><b>Department Details</b></h1>
                <hr>
                <div class="row">
                <div class="card-body">
                    <?php


                      if($value){
                        $c=0;


                        foreach($Q as $data){
                            $c=$c+1;
                    ?>
                    <div class="row">
                        
                    <div class="col-md-12">
                            
                          <h2 class="text-center text-danger"><b><?= $data['name'] ?></b></h2>
                        </div>
                    </div>
                    
                    <br>
                    <div class="row">
                        <div class="col-md-2">
                    
                        
                        </div>
                        <div class="col-md-1">
        
                        </div>

                        
                        <div class="col-md-6">
                            <table class="table">
                            
                            <?php 
                        
                            if($data['photo']!=''){

                            ?>
                                <img src="uploads/<?=$data['photo']?>" alt="User photo" class="img-fluid mx-auto d-block profile-img img-thumbnail" height="85px" width="85px">							
                            <?php 
                                }else{
                            ?>
                                <img src="assets/img/avatar.jpg" alt="User photo" class="img-fluid mx-auto d-block profile-img img-thumbnail" height="85px" width="85px">
                            <?php 
                            }
                            
                            ?>
                            <br>
                            <tr>    
                                    <td><b>ID </td>
                                    <td><b>:</b></td>

                                    <td><?= $data['sid'] ?></td>
                                </tr>
                                <tr> 
                                    <td><b>Room </b></td>
                                    <td><b>:</b></td>

                                    <td><?= $data['room_no'] ?></td>
                                </tr>
                                <tr> 
                                    <td><b>Department </b></td>
                                    <td><b>:</b></td>
                                    
                                    <td><?= $data['department_name'] ?></td>
                                </tr>
                                <tr> 
                                    <td><b>Email </b></td>
                                    <td><b>:</b></td>

                                    
                                    <td><?= $data['email'] ?></td>
                                </tr>
                                
                                <tr> 
                                
                                    <td><b>Mobile </b></td>
                                    <td><b>:</b></td>

                                    <td><?= $data['mobile'] ?></td>
                                </tr>
                                
                                <tr> 
                                    <td><b>Address </b></td>
                                    
                                    <td><b>:</b></td>
                                    <td><?= $data['address'] ?></td>
                                </tr>
                                
                                <tr>
                                
                                    <td><b>Joining Date </b></td>
                                    <td><b>:</b></td>
                                    <td><?= $data['joining_date'] ?></td>
                                </tr>
                                
                                
                                <tr>
                                    
                                
                                    
                                    <td></td>
                                    
                                    <td></td>
                                    <td></td>

                                </tr>
                            </table>
                        
                        </div>

                        
                        <div class="col-md-1">
                            
                        </div>
                        <div class="col-md-2">
                            
                        
                      </div>
                    </div>
                    
                    <br>
                    
                    
                
                    <hr class="recommendation_hr">
                
                    <?php
                        }
                    
                      }
                    
                    ?>
                
                </div>
                
                </div>
                
        </div>

<br>

  <!-- FOOTER -->


  <footer id="footer-main" class="py-5 bg-primary text-center">
  
    <div class="container">
      <div class="row">
        <div class="col-12">
          <p class="lead">Copyright © 2022</p>
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




























