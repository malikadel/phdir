<?php 
  include_once('editContact.php');
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

</head>
<!-- data-spy="scroll" data-target="#navbar-example" -->
<body data-spy="scroll" data-target="#navbar-example">
<!-- Preloader are 1st step towards professional design. -->

<?php include_once("header.php"); ?>


  <br/>
  <div id="services" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Edit Contact and Phone</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <form class="form-horizontal" action="processEditContact.php" method="post">
            <input type="hidden" name="cid" value="<?php echo isset($contact['id'])? $contact['id']: 0; ?>" />
          <div class="form-group">
            <label class="control-label col-sm-2" for="name">Name:</label>
            <div class="col-sm-10">
              <input type="text" value="<?php echo isset($contact['name'])?$contact['name']:''; ?>" class="form-control" name="name" id="name" placeholder="Enter Name" required="required">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
              <input type="text" value="<?php echo isset($contact['email'])? $contact['email']: ''; ?>" class="form-control" name="email" id="email" placeholder="Enter Contact Email">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="phone">Phone:</label>
            <div class="col-sm-8">
              <input type="text" value="<?php echo isset($contact['pnumber'])? $contact['pnumber']: ''; ?>"  class="form-control" name="pnumber" id="" placeholder="Enter Contact Phone">
            </div>
            <div class="col-sm-2">
              <div class="checkbox">
                <label><input type="checkbox" name="pub" value="1"<?php echo (isset($contact['access']) and $contact['access'] == '0')? 'checked': ''; ?> >Make Public</label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary" style="background-color:#3ec1d5; color:white;">Update Contact</button>
            </div>
          </div>
          </form> 

        </div>
      </div>
    </div>
  </div>




<?php include_once("footer.php"); ?>
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
  <script>
    


  </script>
</body>

</html>
