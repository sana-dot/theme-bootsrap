<!DOCTYPE html>
<html>
<head>
    <title> Contact </title>
    <!--  header
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	-->
    <?php include("includes/header.php");?>
</head>
<body>

<!-- Star Navbar -->

<nav class="navbar navbar-expand-lg  ">
    <div class="container">
        <a class="navbar-brand" href="#">Medical</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="#main-nav">
            <ul class="navbar-nav text-uppercase ml-auto"> <!-- ml-auto : el menu yji à gauche-->
                <li class="nav-item ">
                    <a class="nav-link " href="index.php">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="service.php">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="testimorial.php">testimorial</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.php">contact <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- End NavBar-->

<!-- Start Slider-->

<?php include("includes/slider.php");?>
<!--
<div class="slider">
  <img src="images/bg-banner.jpg" alt="...">
</div>
-->
<!-- End Slider-->

<!-- Start Contact  -->
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h1 class="text-uppercase"> Contact Us </h1>
                <h3> Contact info </h3>
                <ul class="list-unstyled">
                    <li> <i class="fa fa-map-marker fa-2x"></i> 321 Awesome Street <br> New York, NY 17022 </li>
                    <li> <i class="fa fa-envelope fa-2x "></i> info@companymail.com </li>
                    <li> <i class="fa fa-phone fa-2x "></i> +1 800 123 1234 </li>
                </ul>
            </div>
            <div class="col-sm-8">
                <h2> Having Any Query! Or Book an appointment </h2>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="your name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="your email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="your subject">
                    </div>
                    <div class="form-group">
                        <textarea  class="form-control" placeholder="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send message</button>
                </form>
            </div>

        </div>

    </div>

</section>

<!-- End  Contact  -->

<!-- Start Footer  -->
<?php include("includes/footer.php");?>
<!--
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h2> About Us </h2>
                <p>It is a long established fact that a reader will be distracted by the readable
                    content of a page when looking at its layout.</p>
            </div>
            <div class="col-sm-4">
                <h2> Quick Links </h2>
                <ul>
                    <li> <a href="#"> Home </a></li>
                    <li> <a href="#"> Service </a></li>
                    <li> <a href="#"> Appointment </a></li>
                </ul>
            </div>
            <div class="col-sm-4">
                <h2> Follow Us </h2>
                <ul class="list-unstyled sociaux">
                    <li> <a href="#"> <i class="fa fa-facebook"></i> </a></li>
                    <li> <a href="#">  <i class="fa fa-google-plus"></i>  </a></li>
                    <li> <a href="#">  <i class="fa fa-linkedin"></i>  </a></li>
                    <li> <a href="#">  <i class="fa fa-twitter"></i>  </a></li>
                </ul>
            </div>
        </div>
        <hr>
        <h5 class="text-center"> &copy; Copyright Medilab Theme. All Rights Reserved Designed by <a href="#"> BootsrapMade.com</a> </h5>
    </div>
</section>
-->
<!-- End Footer   -->
<?php include("includes/script.php");?>
<!--
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
-->

</body>
</html>