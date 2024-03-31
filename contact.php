<!DOCTYPE html>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("id21244282_initiativeworks", "id21244282_localhost", "", "initiativeworks");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//include('db_student.php');

if(isset($_POST['submit']))
{
// Escape user inputs for security

$fname = mysqli_real_escape_string($link, $_REQUEST['fname']);

$lname = mysqli_real_escape_string($link, $_REQUEST['lname']);

$email = mysqli_real_escape_string($link, $_REQUEST['email']);

$message = mysqli_real_escape_string($link, $_REQUEST['message']);

// Attempt insert query execution
$sql = "INSERT INTO contact (fname,lname,email,message) VALUES ('$fname','$lname','$email','$message')";
if(mysqli_query($link, $sql))
{

echo "Records added successfully.";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
// Close connection
mysqli_close($link);

?>



<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Initiativeworks</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- START: header -->
  <div class="probootstrap-loader"></div>

<header role="banner" class="probootstrap-header">
  <div class="container">
      <a href="index.html" class="probootstrap-logo"><img src="img/logo.png" style="height:23px; "></img> </a>
      
      <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
      <div class="mobile-menu-overlay"></div>

      <nav role="navigation" class="probootstrap-nav hidden-xs">
        <ul class="probootstrap-main-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <ul class="probootstrap-right-nav hidden-xs">
          <li><a href="https://www.facebook.com/people/Initiativeworkz/100083696790312/"><i class="icon-facebook2"></i></a></li>
          <li><a href="https://www.instagram.com/initiative.workz/?igshid=MzRlODBiNWFlZA%3D%3D"><i class="icon-instagram2"></i></a></li>
        </ul>
        <div class="extra-text visible-xs"> 
          <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Connect</h5>
          <ul class="social-buttons">
            <li><a href="https://www.facebook.com/people/Initiativeworkz/100083696790312/"><i class="icon-facebook2"></i></a></li>
            <li><a href="https://www.instagram.com/initiative.workz/?igshid=MzRlODBiNWFlZA%3D%3D"><i class="icon-instagram2"></i></a></li>
          </ul>
        </div>
      </nav>
  </div>
</header>

 

  <!-- END: header -->
  <section class="probootstrap-slider flexslider">
    <ul class="slides">
      <li style="background-image: url(img/slider_1.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="slides-text probootstrap-animate">
                <h2>Contact</h2>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </section>
  <!-- END: slider  -->
  
  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <form action="contact.php" method="post" class="probootstrap-form mb60">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fname">First Name</label>
                  <input type="text" class="form-control" id="fname" name="fname">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lname">Last Name</label>
                  <input type="text" class="form-control" id="lname" name="lname">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Send Message">
            </div>
          </form>
        </div>
        <div class="col-md-3 col-md-push-1">
          <h4>Contact Details</h4>
          <ul class="with-icon colored">
            <li><i class="icon-mail"></i><span>initiative.workz@gmail.com</span></li>
            <li><i class="icon-phone2"></i><span>+91 9373320238</span></li>
          </ul>

          <h4>Feedback</h4>
             <p>The services of the initiative works surpassed our expectations in every aspect. Their team demonstrated a high level of expertise and brought our vision to life with a stunning Services that captures the essence of our business. </p>
        </div>
      </div>
    </div>
  </section>  
  </div>

  
  <footer class="probootstrap-footer probootstrap-bg">
    <div class="container">
      <div class="row mb60">
      <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">About Initiative works</h4>
            <p>specialized in web development, graphics design, digital marketing, motion graphics, craft ideas, and app development. </p>
          </div> 
        </div>
         <div class="col-md-3">
          <div class="probootstrap-footer-widget probootstrap-link-wrap">
            <h4 class="heading">Quick Links</h4>
            <ul class="stack-link">
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="services.php">Services</a></li>
              </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">More Links</h4>
            <ul class="stack-link">
              <li><a href="privacy.php">Privacy</a></li>
              <li><a href="terms.php">Terms</a></li>
              <li><a href="https://wa.me/message/ZQL7OZLQSJS6A1">Support Help</a></li>
            </ul>
          </div> 
        </div>
        <div class="col-md-3">
          <div class="probootstrap-footer-widget probootstrap-link-wrap">
            <h4 class="heading">Subscribe</h4>
            <p>"Stay connected with us! Subscribe to our social media channels for the latest updates and exclusive content."</p>
          
          </div>
          <div class="probootstrap-footer-widget right">
            <ul class="probootstrap-social">
              <li><a href="https://www.facebook.com/people/Initiativeworkz/100083696790312/"><i class="icon-facebook"></i></a></li>
              <li><a href="https://www.instagram.com/initiative.workz/?igshid=MzRlODBiNWFlZA%3D%3D"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
  </div>

  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>

  </body>
</html>