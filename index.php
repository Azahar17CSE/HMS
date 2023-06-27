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
        <h3 class="d-inline align-middle"></h3>
      </a>
      <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#showcase">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#authors">Authors</a>
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
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Log In</a>
          
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./img/a.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/b.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/c.jpg" alt="Third slide">
    </div>
	<div class="carousel-item">
      <img class="d-block w-100" src="./img/d.jpg" alt="Third slide">
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

  <!-- BOXES -->
  <section id="boxes" class="py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="card border-primary">
            <div class="card-body">
              <h3 class="text-primary">Be Better</h3>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eius?</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card border-primary bg-primary">
            <div class="card-body">
              <h3>Be Smarter</h3>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eius?</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card border-primary">
            <div class="card-body">
              <h3 class="text-primary">Be Faster</h3>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eius?</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card border-primary bg-primary">
            <div class="card-body">
              <h3>Be Stronger</h3>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eius?</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ABOUT / WHY -->
  <section id="about" class="bg-light py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="info-book">
            <h2 class="display-4 text-primary">Why This Website? </h2>
            <p class="lead mt-3">This is a Hall Management Website.In this Website Hall probost or Admin create new Room Add new student .Delete the student,hall all room Informtion And all department student information they stay in the Hall. </p>
          </div>
          <!-- ACCORDION -->
          <div id="accordion" class="pt-5" role="tablist">
            <div class="card">
              <div class="card-header" role="tab">
                <h5 class="mb-0">
                  <div data-toggle="collapse" href="#collapse1">
                    <i class="fa fa-arrow-circle-down"></i> Get Inspired
                  </div>
                </h5>
              </div>
              <div id="collapse1" class="collapse show" data-parent="#accordion">
                <div class="card-body">
                  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur consectetur accusantium, molestias quos, distinctio, labore assumenda repellendus, beatae adipisci fuga explicabo iure quia. Facilis ratione, aut, impedit id rerum voluptate?</p>
                </div>
              </div>
            </div>
            <div class="card" role="tablist">
              <div class="card-header">
                <h5 class="mb-0">
                  <div data-toggle="collapse" href="#collapse2">
                    <i class="fa fa-arrow-circle-down"></i> Gain The Knowledge
                  </div>
                </h5>
              </div>
              <div id="collapse2" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur consectetur accusantium, molestias quos, distinctio, labore assumenda repellendus, beatae adipisci fuga explicabo iure quia. Facilis ratione, aut, impedit id rerum voluptate?</p>
                </div>
              </div>
            </div>
            <div class="card" role="tablist">
              <div class="card-header">
                <h5 class="mb-0">
                  <div data-toggle="collapse" href="#collapse3">
                    <i class="fa fa-arrow-circle-down"></i> Open Your Mind
                  </div>
                </h5>
              </div>
              <div id="collapse3" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur consectetur accusantium, molestias quos, distinctio, labore assumenda repellendus, beatae adipisci fuga explicabo iure quia. Facilis ratione, aut, impedit id rerum voluptate?</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- AUTHORS -->
  <section id="authors" class="text-center py-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="info-authors mb-5 pb-3">
            <h2 class="display-4 text-primary">Meet The Authors </h2>
            <p class="lead mt-3">Wnen the student or any person probleam face in this time meet the Hall Authors And they can solve there Problem  </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-body">
              <img src="websites-assets/img/person1.jpg" class="img-fluid rounded-circle w-50 mb-3" alt="Susan Williams">
              <h3 >Susan Williams</h3>
              <h5>Lead Writer</h5>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat dolores earum numquam vel tempora, ut.</p>
              <div class="d-flex flex-row justify-content-center">
                <div class="p-4">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </div>
                <div class="p-4">
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="p-4">
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-body">
              <img src="websites-assets/img/person2.jpg" class="img-fluid rounded-circle w-50 mb-3" alt="Susan Williams">
              <h3 >Grace Smith</h3>
              <h5>Co-Writer</h5>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat dolores earum numquam vel tempora, ut.</p>
              <div class="d-flex flex-row justify-content-center">
                <div class="p-4">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </div>
                <div class="p-4">
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="p-4">
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-body">
              <img src="websites-assets/img/person3.jpg" class="img-fluid rounded-circle w-50 mb-3" alt="Susan Williams">
              <h3>John Doe</h3>
              <h5>Editor</h5>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat dolores earum numquam vel tempora, ut.</p>
              <div class="d-flex flex-row justify-content-center">
                <div class="p-4">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </div>
                <div class="p-4">
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="p-4">
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-body">
              <img src="websites-assets/img/person4.jpg" class="img-fluid rounded-circle w-50 mb-3" alt="Susan Williams">
              <h3>Kevin Swanson</h3>
              <h5>Artist</h5>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat dolores earum numquam vel tempora, ut.</p>
              <div class="d-flex flex-row justify-content-center">
                <div class="p-4">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </div>
                <div class="p-4">
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="p-4">
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTACT -->
  <section id="contact" class="py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="info-contact">
            <h2 class="display-4">Get In Touch</h2>
            <p class="lead">Contact the hall provost or the Admin who can Manage this Website.</p>
          </div>
          <form>
            <div class="form-group">
              <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-user"></i>
                  </span>
                </div>
                <input type="text" placeholder="Name" class="form-control form-control-lg">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-envelope"></i>
                  </span>
                </div>
                <input type="email" placeholder="Email" class="form-control form-control-lg">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-pencil"></i>
                  </span>
                </div>
                <textarea name="message" rows="5" class="form-control form-control-lg"></textarea>
              </div>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-lg btn-block" value="Submit">
            </div>
          </form>
        </div>
        <div class="col align-self-center">
          <img src="websites-assets/img/mlogo.png" class="img-fluid d-none d-lg-block" alt="Mizuxe">
        </div>
      </div>
    </div>
  </section>
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


