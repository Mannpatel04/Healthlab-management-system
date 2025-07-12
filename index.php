<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

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
	<link rel="stylesheet" href="redmore.css">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<style>
		.popup .overlay{
			position: fixed;
			top: 0px;
			left: 0px;
			width: 100vw;
			height: 100vw;
			background: rgba(0,0,0,0.7);
			z-index: 1;
			display: none;
		}
		.popup .content{
			position: absolute;
			left: 50%;
			transform: translate(-50%,-50%) scale(0);
			background: #fff;
			width: 450px;
			height: 425px;
			z-index: 2;
			text-align: center;
			padding: 20px;
			box-sizing: border-box;
		}
		.popup .close-btn{
			cursor: pointer;
			position: absolute;
			right: 20px;
			top: 20px;
			width: 30px;
			height: 30px;
			background: #222;
			color: #fff;
			font-size: 25px;
			font-weight: 600;
			line-height: 30px;
			text-align: center;
			border-radius: 50%;
		}
		.popup.active .overlay{
			display: block;
		}
		.popup.active .content{
			transition: all 300ms ease-in-out;
			transform: translate(-50%,-50%) scale(1);
		}
	</style>

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">


	<!-- Start top bar -->
	<div class="main-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="left-top">
						<a class="new-btn-d br-2" href="login.php"><span>Book Appointment</span></a>
						<div class="mail-b"><a href="https://mail.google.com/mail/u/0/#inbox?compose=new"><i class="fa fa-envelope-o" aria-hidden="true"></i> Healthlab@gmail.com</a></div>
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
	<?php
	include "menu.php";

	?>
	<!-- Start Banner -->
	<div class="ulockd-home-slider">
		<div class="container-fluid">
			<div class="row">
				<div class="pogoSlider" id="js-main-slider">
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-01.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Welcome to Health Lab</h1>
								<p>Supporting Health Lifestyles Everyday </p>
								<a href="contactus.php" class="btn">Contact Us</a>
							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-02.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>We are Expert in The Field of Health Lab</h1>
								<p>we are give you satisfaction result.</p>
								<a href="login.php" class="btn">Appointment</a>
							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-03.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Welcome to Health Lab</h1>
								<p>Supporting Health Lifestyles Everyday </p>
								<a href="contactus.php" class="btn">Contact Us</a>
							</div>
						</div>

					</div>
				</div><!-- .pogoSlider -->
			</div>
		</div>
	</div>
	<!-- End Banner -->

	<!-- Start About us -->
	<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<h2>About Us</h2>
							<p> <b>A place for great experiments and best result.</b></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row align-items-center about-main-info">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<h2> Welcome to Health Lab </h2>
								<p>A medical laboratory or clinical laboratory is a laboratory where tests are carried out on clinical specimens to obtain information about the health of a patient to aid in diagnosis, treatment, and prevention of disease. Clinical Medical laboratories are an example of applied science, as opposed to research laboratories that focus on basic science, such as found in some academic institutions.</p>
								<p>Medical laboratories vary in size and complexity and so offer a variety of testing services. More comprehensive services can be found in acute-care hospitals and medical centres, where 70% of clinical decisions are based on laboratory testing. Doctors offices and clinics, as well as skilled nursing and long-term care facilities, may have laboratories that provide more basic testing services. Commercial medical laboratories operate as independent businesses and provide testing that is otherwise not provided in other settings due to low test volume or complexity.</p>
								<a href="aboutus.php" class="new-btn-d br-2">Read More</a>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="about-m">
									<ul id="banner">
										<li>
											<img src="images/about-img-01.jpg" alt="">
										</li>
										<li>
											<img src="images/about-img-02.jpg" alt="">
										</li>
										<li>
											<img src="images/about-img-03.jpg" alt="">
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About us -->

	<!-- Start Services -->
	<div id="services" class="services-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Services</h2>
						<p><b>We provide you so many services.</b> </p>
					</div>
				</div>
			</div>

			<div class="row">

			<div class="popup" id="popup-1">
			<div class="overlay"></div>
			<div class="content">
				<div class="close-btn" onclick="togglePopup(1)">&times;</div><br>
				<img src="./editimg/home-collect.png" alt="" style="width:100px; height:100px;">
				<!-- <p>You can report to your area labs from home on our website.</p> -->
				<p><b>TAKE A SAMPLE IN YOUR HOME</b></p>
				<p>Our Labs Send Sample Takers at Home they collects the Sample at your door step.</p>
				<p>One Of The Advantages Of This Is That you do not need to go to the laboratory.</p>
				
			</div>
			</div>
			<img src="./editimg/home-collect.png" alt="" style="width: 100px; height:100px;"><br>
			<button onclick="togglePopup(1)" style="color: #000;">Sample</button>

			<div class="popup" id="popup-2">
			<div class="overlay"></div>
			<div class="content">
				<div class="close-btn" onclick="togglePopup(2)">&times;</div><br>
				<img src="./editimg/injection.png" alt="" style="width: 100px; height:100px;">
				<p><b>FRESH MEDICAL INSTRUMENTS</b></p>
				<p>We use everything brand new in our laboratory. </p>
				<p>So that no one gets any kind of infection and people do not get sick.</p>
				
				<!-- <p>Collectors from our website use all the fresh medical instruments.</p> -->
			</div>
			</div>
			<img src="./editimg/injection.png" alt="" style="width: 100px; height:100px;"><br>
			<button onclick="togglePopup(2)" style="color: #000;">Instrument</button>

			<div class="popup" id="popup-3">
			<div class="overlay"></div>
			<div class="content">
				<div class="close-btn" onclick="togglePopup(3)">&times;</div><br>
				<img src="./editimg/paperless.png" alt="" style="width: 100px; height:100px;">
				    <p><b>REPORTS IN PDF FORM</b></p>
					<p>The tested report is available at home and can be downloaded via PDF.</p>
					<p>So there is no need to go to the laboratory for taking reports.</p>
				<!-- <p>In our website you do not have to come to the labs to get the reports it comes to your mobile in the form of pdf.</p> -->
			</div>
			</div>
			<img src="./editimg/paperless.png" alt="" style="width: 100px; height:100px;"><br>
			<button onclick="togglePopup(3)" style="color: #000;"> Reports in Pdf Format</button>
			<br/>

			<div class="popup" id="popup-4">
			<div class="overlay"></div>
			<div class="content">
				<div class="close-btn" onclick="togglePopup(4)">&times;</div><br>
				<img src="./editimg/report1.png" alt="" style="width:50px; height:50px;"><br>
				<p><b>OUR REPORTS</b></p>
				<table style=" border-collapse: collapse; width: 100%; height:150px;">
									<tr style="background-color: #dddddd;">
										<th style="border: 1px solid #dddddd; text-align: left;padding: 8px;">Report's type</th>
										<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Price</th>
									</tr>
									<?php
								include "myconnection.php";
								$q5="select * from reporttype";
								$result5=mysqli_query($connection,$q5) or die("query error");
								while($data=mysqli_fetch_array($result5))
								{
									echo "<tr><td>".$data['reportname']."</td><td>".$data['price']."</td></tr>";
								}
								?>
									
									</table>
				  
			</div>
			</div>
			<img src="./editimg/report1.png" alt="" style="width: 100px; height:100px; margin-left: 10px;"><br>
			<button onclick="togglePopup(4)" style="color: #000;">Reports</button>

			<div class="popup" id="popup-5">
			<div class="overlay"></div>
			<div class="content">
				<div class="close-btn" onclick="togglePopup(5)">&times;</div><br>
				<img src="./editimg/labsample.png" alt="" style="width: 150px; height:100px;">
				<p><b>OUR LABS</b></p>
				<table style=" border-collapse: collapse; width: 100%;">
									<tr style="background-color: #dddddd;">
										
										<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">LabName</th>
										<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Email</th>
										
									</tr>
								<?php
								include "myconnection.php";
								$q4="select * from labs";
								$result4=mysqli_query($connection,$q4) or die("query error");
								while($data=mysqli_fetch_array($result4))
								{
									echo "<tr><td>".$data['labname']."</td><td>".$data['email']."</td></tr>";
								}
								?>

									
								
									</table>
				
			</div>
			</div>
			<img src="./editimg/labsample.png" alt="" style="width: 100px; height:100px;"><br>
			<button onclick="togglePopup(5)" style="color: #000;">Lab</button>
			
			</div>
		</div>
	</div>
	<!-- End Services -->

	<!-- Start Appointment -->
	
	<!-- End Appointment -->

	<!-- Start Gallery -->
	<div id="gallery" class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Gallery</h2>
						<p><b>These are just a few images of our lab,team and how we work.</b></p>
					</div>
				</div>
			</div>

			<div class="popup-gallery row clearfix">
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-01.jpg" alt="" style="height: 200px;">
						<div class="box-content">
							<h3 class="title">Zoom In</h3>
							<ul class="icon">
								<li><a href="images/gallery-01.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-02.jpg" alt=""  style="height: 200px;">
						<div class="box-content">
							<h3 class="title">Zoom In</h3>
							<ul class="icon">
								<li><a href="images/gallery-02.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-03.jpg" alt=""  style="height: 200px;">
						<div class="box-content">
							<h3 class="title">Zoom In</h3>
							<ul class="icon">
								<li><a href="images/gallery-03.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-04.jpg" alt=""  style="height: 200px;">
						<div class="box-content">
							<h3 class="title">Zoom In</h3>
							<ul class="icon">
								<li><a href="images/gallery-04.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-05.jpg" alt=""  style="height: 200px;">
						<div class="box-content">
							<h3 class="title">Zoom In</h3>
							<ul class="icon">
								<li><a href="images/gallery-05.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-06.jpg" alt=""  style="height: 200px;">
						<div class="box-content">
							<h3 class="title">Zoom In</h3>
							<ul class="icon">
								<li><a href="images/gallery-06.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-07.jpg" alt=""  style="height: 200px;">
						<div class="box-content">
							<h3 class="title">Zoom In</h3>
							<ul class="icon">
								<li><a href="images/gallery-07.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/gallery-08.jpg" alt=""  style="height: 200px;">
						<div class="box-content">
							<h3 class="title">Zoom In</h3>
							<ul class="icon">
								<li><a href="images/gallery-08.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->

	<!-- Start Team -->
	<div id="team" class="team-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Our Doctor</h2>
						<p><b>We have a few Images of Experienced Doctors.</b></p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="images/img-1.jpg" alt="">
						</div>
						<div class="team-content">
							<h3 class="title">Dr. yogita Thummar</h3>
							<span class="post">MBBS,MD</span>
							
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="images/img-2.jpg" alt="">
						</div>
						<div class="team-content">
							<h3 class="title">Dr. Aakash Dhameliya</h3>
							<span class="post">BHMS</span>
							
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="images/img-3.jpg" alt="">
						</div>
						<div class="team-content">
							<h3 class="title">Dr. Malini Desai</h3>
							<span class="post">MBBS</span>
							
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- End Team -->

		<!-- Start Collector -->
		<div id="team" class="team-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Our Collector</h2>
						<p><b>We have a few Images of Experienced Collectors.</b></p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="images/col.jpg" alt="" style="height: 386px;"> 
						</div>
						<div class="team-content">
							<h3 class="title">Tanmay Patel</h3>
							<span class="post">Varachha</span>
							
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="images/col2.jpg" alt="" style="height: 386px;">
						</div>
						<div class="team-content">
							<h3 class="title">Yami Vaddoriya</h3>
							<span class="post">Udhna</span>
							
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="images/col3.jpg" alt="" style="height: 386px;">
						</div>
						<div class="team-content">
							<h3 class="title">Hiren Gilitwala</h3>
							<span class="post">Katargam</span>
							
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
		<!-- End Collector -->





	<!-- Start Blog -->
	
	<!-- End Blog -->

	<!-- Start Contact -->
	<div id="contact" class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Contact us</h2>
						<p><b>If you like our website, you can join our website by clicking on this button.</b></p>
					</div>
				</div>
			</div>
			<div class="row">

				<div class="col-lg-12 col-xs-12">
					<div class="contact-block">
						
							
								
								
								
								
									<div class="submit-button text-center" align="center">
										<button class="btn btn-common" id="submit" type="submit"><a href="contactus.php">Contact</a></button>
										<div id="msgSubmit" class="h3 text-center hidden"></div>
										<div class="clearfix"></div>
									</div>
								
							</div>
						
					</div>
				</div>


				<div class="col-lg-12 col-xs-12">
					<div class="left-contact">
						<h2>Address</h2>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-location-arrow" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Address</h4>
								<p>35, P.R. Complex, Bharthana, Vesu, Surat.</p>
							</div>
						</div>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Email</h4>
								<a href="https://mail.google.com/mail/u/0/#inbox?compose=new">Healthlab@gmail.com</a><br>
								<!-- <a href="https://mail.google.com/mail/u/0/#inbox?compose=new">Healthlab@gmail.com</a> -->
							</div>
						</div>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Phone Number</h4>
								<a>7573052215</a><br>
								<a>9328366802</a>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>
	<!-- End Contact -->

	<!-- Start Subscribe -->

	<!-- End Subscribe -->

	<!-- Start Footer -->
	<footer class="footer-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="footer-company-name">Develop By Purvish Dobariya & Mann Badreshiya.</p>
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
	<script src="redmore.js"></script>
	<script>
		function togglePopup(n) {
			document.getElementById("popup-" + n).classList.toggle("active");
		}
	</script>
</body>

</html>