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
                            

                            <div class="row">
                                <div class="col-xs-12 col-sm-8 custom_right">
                                    <div class="single_content_left">
                                        <div class="row">
                                            <div class="col-xs-12 text-left">

                                                <div class="courses_right_inner">
                                                    <table class="table table-bordered table-hover table-striped">

                                                        <tbody>
                                                            <tr>
                                                                <td colspan="4" class="un-titl">
                                                                    <h4 style="color:#000;"> Office of the Honorable Vice Chancellor </h4>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="col-wid">Professor AQM Mahbub</td>
                                                                <td class="col-wid">Vice Chancellor, BSMRSTU </td>
                                                                <td>+88000000004</td>
                                                                <!--<td>+88-0531-61322</td>-->
                                                                <td class="col-wid">vice-chancellor@bsmrstu.ac.bd</td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td colspan="4" style="">
                                                                    <h4 style="color:#000;"> Office of the Hall Provost</h4>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="col-wid">Professor Dr. Bidhan Chandra Halder</td>
                                                                <td class="col-wid">Treasurer</td>
                                                                <td class="col-wid">+8801715057495</td>
                                                                <td class="col-wid">bchhstu@yahoo.com</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="4" style="background-image: url('https://hstu.ac.bd/img/un-tit.jpg'); text-align: center;">
                                                                    <h4 style="color:#000;"> Office of the Registrar </h4>
                                                                </td>
                                                            </tr>


                                                            <tr>
                                                                <td>Professor Dr. Md. Saifur Rahman</td>
                                                                <td>Registrar </td>
                                                                <td>
                                                                    +8801713163315<br> +88-0531-61355(0ff)
                                                                </td>
                                                                <td>registrar@hstu.ac.bd</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Md. Muniruzzaman</td>
                                                                <td>Administrative Officer</td>
                                                                <td>+880-531-61355</td>
                                                                <td>mzamanhstu@gmail.com</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="4" class="un-titl">
                                                                    <h4 style="color:#000;"> All Hall Teacher Information </h4>
                                                                </td>
                                                            </tr>


                                                            <tr>
                                                                <td>Prof. Dr. Fahima Khanom</td>
                                                                <td>Faculty of Post Graduate Studies</td>
                                                                <td>+8801715650669</td>
                                                                <td>fahima@hstu.ac.bd</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Prof. Dr. Roushan Ara</td>
                                                                <td>Faculty of Agriculture</td>
                                                                <td>+8801718675587</td>
                                                                <td>roushanara@hstu.ac.bd</td>
                                                            </tr>


                                                            <tr>
                                                                <td>Prof. Md. Mehedi Islam</td>
                                                                <td>Faculty of Computer Science & Engineering</td>
                                                                <td>+8801716239606</td>
                                                                <td>mehedi@hstu.ac.bd</td>
                                                            </tr>



                                                            <tr>
                                                                <td>Prof. Rafia Akhtar</td>
                                                                <td>Faculty of Business Studies</td>
                                                                <td>+8801727282204</td>
                                                                <td>deanbs@hstu.ac.bd</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Prof. Dr. Md. Sazzat Hossain Sarker</td>
                                                                <td>Faculty of Engineering</td>
                                                                <td>+8801705950003</td>
                                                                <td>mshsarker@hstu.ac.bd</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Prof. Dr. Imran Parvez</td>
                                                                <td>Faculty of Fisheries</td>
                                                                <td>+8801914503031</td>
                                                                <td>imran_bau2007@yahoo.com</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Prof. Dr. Tahera Yeasmin </td>
                                                                <td>Faculty of Veterinary & Animal Science</td>
                                                                <td>+8801711469301</td>
                                                                <td>taherayb@yahoo.com</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Prof. Dr. Syeda Jahanara Afrose</td>
                                                                <td>Faculty of Science</td>
                                                                <td>+8801738118000</td>
                                                                <td>syedajahanaraafro27@gmail.com</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Prof. Md. Nawsher Oan</td>
                                                                <td>Faculty of Social Science & Humanities</td>
                                                                <td>+8801716872917</td>
                                                                <td>nawsher_oan@yahoo.com</td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end single content left-->
                                </div>
                               
                            </div>
                            <!--end row-->
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





