<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: signin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Geek E-Learning Platform" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title> Geek </title>
        <!-- Include Stylesheet Files -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="icons/css/all.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/home.css">
        <!-- ====================
            Designed By : Hesham Mohamed Fathy 
        ===================== -->
    </head>
    <body>
        <!-- Upper bar Section -->
            <div class="upperbar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                          <i class="fas fa-tty"></i> 02555555550 , <i class="fas fa-mobile-alt"></i> 015000000056100
                        </div>
                        <div class="col-sm">
                            Let's Work Together , <button class="btn btn-outline-success">Our Vision</button> 
                        </div>
                    </div>
                </div>
            </div>
        <!-- Navbar Section -->
         <nav class="navbar navbar-expand-lg">
          <div class="container">
            <a class="navbar-brand" href="#"> Geek </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="main.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Work</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="courses.php">Courses</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">Live Training</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                   <li class="nav-item">
                    <a class="nav-link" href="onlinecourse/index.php">Profile</a>
                </li>
                   <li class="nav-item">
                    <a class="nav-link" href="index.php">Logout</a>
                </li>
                </ul>
            </div>
          </div>
         </nav>
           <!-- Courses Section -->
            <div class="courses text-center">
                <div class="container">
                    <h3>Our Courses</h3>
                    <p class="outerp"> If you are looking for Courses on the web, you may be very confused at the difference in price.
                         You may see some for as low as $15 each </p>
                    <ul class="row list-unstyled">
                        <li data-class=".all" class="active col-md"> All </li>
                        <li data-class=".web" class="col-md"> Web Development </li>
                        <li data-class=".mob" class="col-md"> Mobile Development </li>
                        <li data-class=".ml" class="col-md"> Machine Learning &amp; Ai </li>
                        <li data-class=".gd" class="col-md"> Graphic Design </li>
                    </ul>
                    <div class="row coursesinfo">
                        <div class="card col-md-4 col-sm-12 mob" style="width: 23rem;">
                            <img src="images/iphone.jpg" class="card-img-top" alt="iphone">
                            <div class="card-body">
                                <h5 class="card-title">By : Hesham Mohamed </h5>
                                <p class="card-text">Developing Ios Apps Using  Swift 4 &amp; Ios 12</p>
                                <hr>
                                <span>Price :</span><span class="del"> 30$ </span><span> 15$ </span><br>
                                <a href="payment/payment.php" class="btn btn-outline-primary">Enroll Now</a>
                            </div>
                        </div>
                         <div class="card col-md-4 col-sm-12 mob" style="width: 23rem;">
                            <img src="images/android.jpg" class="card-img-top" alt="iphone">
                            <div class="card-body">
                                <h5 class="card-title">By : Hesham Mohamed </h5>
                                <p class="card-text">Developing Android Apps Using  Java &amp; Android Studio</p>
                                <hr>
                                <span>Price :</span><span class="del"> 30$ </span><span> 15$ </span><br>
                                <a href="payment/payment.php" class="btn btn-outline-primary">Enroll Now</a>
                            </div>
                        </div>
                          <div class="card col-md-4 col-sm-12 web" style="width: 23rem;">
                            <img src="images/node.jpg" class="card-img-top" alt="iphone">
                            <div class="card-body">
                                <h5 class="card-title">By : Hesham Mohamed </h5>
                                <p class="card-text">Developing web Apps Using  Node.js &amp; Express.js</p>
                                <hr>
                                <span>Price :</span><span class="del"> 30$ </span><span> 15$ </span><br>
                                <a href="payment/payment.php" class="btn btn-outline-primary">Enroll Now</a>
                            </div>
                        </div>
                           <div class="card col-md-4 col-sm-12 mob" style="width: 23rem;">
                            <img src="images/ios.jpg" class="card-img-top" alt="iphone">
                            <div class="card-body">
                                <h5 class="card-title">By : Hesham Mohamed </h5>
                                <p class="card-text">Developing Ios Apps Using  Swift 4 &amp; Ios 12</p>
                                <hr>
                                <span>Price :</span><span class="del"> 30$ </span><span> 15$ </span><br>
                                <a href="payment/payment.php" class="btn btn-outline-primary">Enroll Now</a>
                            </div>
                        </div>
                            <div class="card col-md-4 col-sm-12 ml" style="width: 23rem;">
                            <img src="images/ml.jpg" class="card-img-top" alt="iphone">
                            <div class="card-body">
                                <h5 class="card-title">By : Hesham Mohamed </h5>
                                <p class="card-text">Learn Ml From Scratch To Advanced Topics</p>
                                <hr>
                                <span>Price :</span><span class="del"> 30$ </span><span> 15$ </span><br>
                                <a href="payment/payment.php" class="btn btn-outline-primary">Enroll Now</a>
                            </div>
                        </div>
                             <div class="card col-md-4 col-sm-12 ml" style="width: 23rem;">
                            <img src="images/ai.png" class="card-img-top" alt="iphone">
                            <div class="card-body">
                                <h5 class="card-title">By : Hesham Mohamed </h5>
                                <p class="card-text"> Learn Ai From Scratch To Advanced Topics</p>
                                <hr>
                                <span>Price :</span><span class="del"> 30$ </span><span> 15$ </span><br>
                                <a href="payment/payment.php" class="btn btn-outline-primary">Enroll Now</a>
                            </div>
                        </div>
                              <div class="card col-md-4 col-sm-12 gd" style="width: 23rem;">
                            <img src="images/illustrator.jpg" class="card-img-top" alt="iphone">
                            <div class="card-body">
                                <h5 class="card-title">By : Hesham Mohamed </h5>
                                <p class="card-text">Learn illustrator From Zero To Hero</p>
                                <hr>
                                <span>Price :</span><span class="del"> 30$ </span><span> 15$ </span><br>
                                <a href="payment/payment.php" class="btn btn-outline-primary">Enroll Now</a>
                            </div>
                        </div>
                               <div class="card col-md-4 col-sm-12 gd" style="width: 23rem;">
                            <img src="images/ps.jpg" class="card-img-top" alt="iphone">
                            <div class="card-body">
                                <h5 class="card-title">By : Hesham Mohamed </h5>
                                <p class="card-text">Learn Photoshop From Zero To Hero</p>
                                <hr>
                                <span>Price :</span><span class="del"> 30$ </span><span> 15$ </span><br>
                                <a href="payment/payment.php" class="btn btn-outline-primary">Enroll Now</a>
                            </div>
                        </div>
                                <div class="card col-md-4 col-sm-12 web" style="width: 23rem;">
                            <img src="images/php.jpg" class="card-img-top" alt="iphone">
                            <div class="card-body">
                                <h5 class="card-title">By : Hesham Mohamed </h5>
                                <p class="card-text">Developing Web Apps Using  Php &amp; Mysql</p>
                                <hr>
                                <span>Price :</span><span class="del"> 30$ </span><span> 15$ </span><br>
                                <a href="payment/payment.php" class="btn btn-outline-primary">Enroll Now</a>
                            </div>
                        </div>
                                <div class="row coursesinfo">
                        <div class="card col-md-4 col-sm-12 mob" style="width: 23rem;">
                            <img src="images/iphone.jpg" class="card-img-top" alt="iphone">
                            <div class="card-body">
                                <h5 class="card-title">By : Hesham Mohamed </h5>
                                <p class="card-text">Developing Ios Apps Using  Swift 4 &amp; Ios 12</p>
                                <hr>
                                <span>Price :</span><span class="del"> 30$ </span><span> 15$ </span><br>
                                <a href="payment/payment.php" class="btn btn-outline-primary">Enroll Now</a>
                            </div>
                        </div>
                         <div class="card col-md-4 col-sm-12 mob" style="width: 23rem;">
                            <img src="images/android.jpg" class="card-img-top" alt="iphone">
                            <div class="card-body">
                                <h5 class="card-title">By : Hesham Mohamed </h5>
                                <p class="card-text">Developing Android Apps Using  Java &amp; Android Studio</p>
                                <hr>
                                <span>Price :</span><span class="del"> 30$ </span><span> 15$ </span><br>
                                <a href="payment/payment.php" class="btn btn-outline-primary">Enroll Now</a>
                            </div>
                        </div>
                          <div class="card col-md-4 col-sm-12 web" style="width: 23rem;">
                            <img src="images/node.jpg" class="card-img-top" alt="iphone">
                            <div class="card-body">
                                <h5 class="card-title">By : Hesham Mohamed </h5>
                                <p class="card-text">Developing web Apps Using  Node.js &amp; Express.js</p>
                                <hr>
                                <span>Price :</span><span class="del"> 30$ </span><span> 15$ </span><br>
                                <a href="payment/payment.php" class="btn btn-outline-primary">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Section -->
            <footer>
                <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                       <p>
                            Designed <i class="fa fa-heart"></i> by
                            <a target="_blank" href="#">Hesham Mohamed Fathy</a>
                             Copyright &copy; 2019 All Right Reserved
                      </p>
                    </div>
                
                 <div class="col-sm-4 col-xs-12 rule">
                        <div><a href="#">Terms of Use</a></div>
                        <div><a href="#">Privacy Policy</a></div>
                </div>
                 <div class="col-sm-4 col-xs-12">
                        <span><a href="#"><i class="fab fa-facebook fa-2x"></i></a></span>
                        <span><a href="#"><i class="fab fa-twitter-square fa-2x"></i></a></span>
                        <span><a href="#"><i class="fas fa-envelope fa-2x"></i></a></span>
                        <span><a href="#"><i class="fab fa-github fa-2x"></i></a></span>
                </div>
                </div>
                </div>
            </footer>
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>