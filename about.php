<!DOCTYPE html>
<html>
<head>
    <title> about </title>
    <?php include("includes/header.php");?>
    <!--
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    -->
</head>
<body>

<!-- Star Navbar -->
<?php include("includes/navbar.php");?>
<!--
<nav class="navbar navbar-expand-lg  ">
    <div class="container">
        <a class="navbar-brand" href="#">Medical</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="#main-nav">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item ">
                    <a class="nav-link " href="index.php">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="service.php">Service</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="about.php">About<span class="sr-only">(current)</span> </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="testimorial.php">testimorial </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="contact.php">contact </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
-->
<!-- End NavBar-->

<!-- Start Slider-->

<?php include("includes/slider.php");?>
<!--
<div class="slider">
  <img src="images/bg-banner.jpg" alt="...">
</div>
-->
<!-- End Slider-->

<!-- Start about  -->
<section class="about-us">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-uppercase"> "A few words about us" </h1>
            </div>
            <div class="col">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the sdes,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End about  -->



<!-- Start Doctor -->
<section class="doctor">
    <div class="container">
        <h1 class="h1 text-uppercase text-center"> Our Doctors</h1>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="card" >
                    <img src="images/doctor1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jessica Wally</h5>
                        <p class="card-text"> Doctor </p>
                        <ul class="list-unstyled" >
                            <li> <a href="#"><i class="fa fa-facebook"></i></a> </li>
                            <li> <a href="#"><i class="fa fa-twitter"></i></a> </li>
                            <li> <a href="#"><i class="fa fa-google-plus"></i></a> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card" >
                    <img src="images/doctor2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lai Donas</h5>
                        <p class="card-text"> Doctor </p>
                        <ul class="list-unstyled">
                            <li>  <a href="#"><i class="fa fa-facebook"></i></a> </li>
                            <li> <a href="#"><i class="fa fa-twitter"></i></a> </li>
                            <li> <a href="#"><i class="fa fa-google-plus"></i></a> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card" >
                    <img src="images/doctor3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Amanda Danis</h5>
                        <p class="card-text"> Doctor </p>
                        <ul class="list-unstyled">
                            <li>  <a href="#"><i class="fa fa-facebook"></i></a> </li>
                            <li> <a href="#"><i class="fa fa-twitter"></i></a> </li>
                            <li> <a href="#"><i class="fa fa-google-plus"></i></a> </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card" >
                    <img src="images/doctor4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jason Davis</h5>
                        <p class="card-text"> Doctor </p>
                        <ul class="list-unstyled">
                            <li>  <a href="#"><i class="fa fa-facebook"></i></a> </li>
                            <li> <a href="#"><i class="fa fa-twitter"></i></a> </li>
                            <li> <a href="#"><i class="fa fa-google-plus"></i></a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End doctors -->

<!-- Start Patient -->

<section class="patient">
    <div class="container">
        <h1 class="text-uppercase"> See what patients are saying? </h1>
        <div class="row">
            <div class="col-md-4">
                <p class="description">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since when an

                </p>
                <img src="images/thumb.png">
                <h2> Alex Texas </h2>
            </div>
            <div class="col-md-4">
                <p class="description">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since when an

                </p>
                <img src="images/thumb.png">
                <h2> Alex Texas </h2>
            </div>
            <div class="col-md-4">
                <p class="description">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since when an

                </p>
                <img src="images/thumb.png">
                <h2> Alex Texas </h2>
            </div>
        </div>
    </div>
</section>

<!-- End Patient -->

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