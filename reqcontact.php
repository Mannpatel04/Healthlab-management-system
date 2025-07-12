<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>First Health Lab</title>  


    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/symbol.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	
	<!-- Start top bar -->
	<div class="main-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="left-top">
						<a class="new-btn-d br-2" href="login.php"><span>Book Appointment</span></a>
						<div class="mail-b"><a href="https://mail.google.com/mail/u/0/#inbox?compose=new"><i class="fa fa-envelope-o" aria-hidden="true"></i>Healthlab@gmail.com</a></div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="wel-nots">
						<p>Welcome to Our Health Lab!</p>
					</div>
					<div class="right-top">
					<ul>
							<li><a href="https://www.facebook.com/profile.php?id=100079471557508"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="https://www.instagram.com/healthlab3145/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End top bar -->
	
	<!-- Start header -->
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="image"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="index.php">Home</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<!-- End header -->
	

	

	
	
	<!-- Start Appointment -->
	<div id="appointment" class="appointment-main">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>New Lab Signup</h2>
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="well-block">
                       <?php
						$name=$_POST['txtname'];
                        $em=$_POST['txtem'];
                        $ph=$_POST['txtph'];
                        $msg=$_POST['txtmsg'];
                        
						
						

                        include "myconnection.php";
                        
                            $q="insert into contactus(name,email,phoneno,message) values('$name','$em','$ph','$msg')";
                            $result=mysqli_query($connection,$q) or die(mysqli_error($connection));
                            echo "success";
                        
					
					?>
                      
                        
                    </div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="well-block">
                        <div class="well-title">
                            <h2>Thank you for contact with us</h2>
                        </div>
                        <div class="feature-block">
                            
                           
                            
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Appointment -->
	
	
	<!-- Start Subscribe -->
	
	<!-- Start Footer -->
	<footer class="footer-box" style="bottom: 0;
    position: absolute;
    width: 100%;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				<p class="footer-company-name">Develope By Ritisha Dobariya & Prarthana Hirpara.</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script> 
	<script src="js/slider-index.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/TweenMax.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
	<script src="js/isotope.min.js"></script>	
	<script src="js/images-loded.min.js"></script>	
    <script src="js/custom.js"></script>
</body>
</html>