<?php 
include_once('settings.php');

  $phoneNumbers = array();
  $privateNumbers = array();
  publicPhones();
?>
<!doctype html>
<html lang="en">
<head>
  <!-- enable you to load utf-8 text in html file -->
  <meta charset="utf-8">
 
  <title>Phone Directory</title>

 <!-- For phonescreens  -->
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
<!-- SEO -->
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <!-- 
    <link href="lib/bootstrap/css/bootstrap.min.css " rel="stylesheet"> 
  -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">


  <!-- Libraries CSS Files -->
  <!-- Task: Understand the functionality of all these plugins. -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

<!-- Using bootstrap is not sufficient, great looks use styling like two following files.  -->
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">
  <script>

      var urlParams = new URLSearchParams(window.location.search);
      if(urlParams.has('message'))
      {
        alert(urlParams.get('message'));      
      }


  </script>
</head>
<!-- data-spy="scroll" data-target="#navbar-example" -->
<body data-spy="scroll" data-target="#navbar-example">
<!-- Preloader are 1st step towards professional design. -->

<?php include_once("header.php"); ?>

  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="img/slider/slider1.jpg" alt="" title="#slider-direction-1" />
        <img src="img/slider/slider2.jpg" alt="" title="#slider-direction-2" />
        <img src="img/slider/slider3.jpg" alt="" title="#slider-direction-3" />
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">The Best Phone Directory </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Helping Businesses</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">The Best Phone Directory </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Helping Businesses</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">The Best Phone Directory</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Helping Businesses</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->
  <!-- Start Public Contact Area -->
  <div id="public-contacts" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Public Contacts</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <table class="table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tbody>

                <?php 
                if(count($phoneNumbers) > 0)
                {
                  foreach($phoneNumbers as $phoneNumber)
                  { 
                  ?>
                  <tr>
                    <td><?php echo $phoneNumber['name']; ?></td>
                    <td><?php echo $phoneNumber['pnumber']; ?></td>
                    <td><?php echo $phoneNumber['email']; ?></td>
                  </tr>
                <?php 
                  }                   
                }
                else
                { ?>
                  <tr>
                    <td colspan="3">No Public Phone Number is found in directory.</td>
                  </tr>
                <?php 
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php

  if(isset($_SESSION['loggedIn']) and $_SESSION['loggedIn'] == true)
  {
    $call = privatePhones();
?>
  <div id="private-directory" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Private Contacts</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <table class="table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>

                <?php 
                if(count($privateNumbers) > 0)
                {
                  foreach($privateNumbers as $phoneNumber)
                  { 
                  ?>
                  <tr>
                    <td><?php echo $phoneNumber['name']; ?></td>
                    <td><?php echo $phoneNumber['pnumber']; ?></td>
                    <td><?php echo $phoneNumber['email']; ?></td>
                    <td>
                      <a href="editPhones.php?cid=<?php echo $phoneNumber['id'] ?>" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="deleteContact.php?cid=<?php echo $phoneNumber['id'] ?>" class="btn btn-danger btn-xs"><i class=" glyphicon glyphicon-remove"></i></a>
                    </td>
                  </tr>
                <?php 
                  }                   
                }
                else
                { ?>
                  <tr>
                    <td colspan="3">No Private Phone Number is found in your directory.</td>
                  </tr>
                <?php 
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php 
  }
  else
  {
?>
  <!-- Start Login Area -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Login</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="login-form">
            <div class="main-div">
              <div class="panel">
                <h2>User Login</h2>
                <p>Please enter your email and password</p>
              </div>
              <form id="Login"  method="post" action="loginProcess.php">
                  <div class="form-group">
                      <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email Address">
                  </div>
                  <div class="form-group">
                      <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
                  </div>
                  <div class="forgot">
                    <a href="reset.html">Forgot password?</a>
                  </div>
                  <button type="submit" class="btn btn-primary">Login</button>
              </form>
            </div>
          </div>
        </div>

        <!-- single-well end-->
      </div>
    </div>
  </div>
  <!-- End Login area -->

  <!-- Start Signup area -->
  <div id="services" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Signup</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="login-form">
            <div class="main-div">
              <div class="panel">
                <h2>User Register</h2>
                <p>Please enter your Name, Email and Password</p>
              </div>
              <form id="Signup" method="post" action="signupProcess.php">
                  <div class="form-group">
                      <input type="text" class="form-control" id="signupName" name="name" placeholder="Name">
                  </div>
                  <div class="form-group">
                      <input type="email" class="form-control" id="signupEmail" name="email" placeholder="Email Address">
                  </div>
                  <div class="form-group">
                      <input type="password" class="form-control" id="signupPassword" name="password" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-primary">Signup</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Signup area -->
<?php     
  } 
?>
  <!-- Start Wellcome Area -->
  <div class="wellcome-area">
    <div class="well-bg">
      <div class="test-overly"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="wellcome-text">
              <div class="well-text text-center">
                <h2>Helping Businesses</h2>
                <p>
                  Fully adoptable phone directory with rich features in it.Fully adoptable phone directory with rich features in it.Fully adoptable phone directory with rich features in it.
                </p>
                <div class="subs-feilds">
                  <div class="suscribe-input">
                    <input type="email" class="email form-control width-80" id="sus_email" placeholder="Email">
                    <button type="submit" id="sus_submit" class="add-btn width-20">Subscribe</button>
                    <div id="msg_Submit" class="h3 text-center hidden"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Wellcome Area -->








  <!-- Start Suscrive Area -->
  <div class="suscribe-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
          <div class="suscribe-text text-center">
            <h3>Welcome to our PHDir Company</h3>
            <a class="sus-btn" href="#">Get A quote</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Suscrive Area -->

<?php include_once('footer.php'); ?>




  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <!-- /*  <script src="lib/bootstrap/js/bootstrap.min.js"></script>*/ -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <!-- Uncomment below if you want to use dynamic Google Maps -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script> -->

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>
</body>

</html>
