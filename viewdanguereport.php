<?php
session_start();
include "sec.php";
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
	<!-- Start Header -->
    <header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="index.html"><img src="images/logo6.png" alt="image" style="width: 100%; height:100px;"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                <ul class="navbar-nav">
                        <?php
                        echo $_SESSION['una'];

                        ?>
                        <li><a class="nav-link active" href="index.php">Home</a></li>
                        <li><a class="nav-link" href="viewrequest.php">view request</a></li>						            
                        <li><a class="nav-link" href="logout.php">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
	</header>
  <!-- End Header -->
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              
              
            </div>
            <div class="row">
                    
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <?php
                    include "myconnection.php";
                     $em1=$_SESSION['una'];
                     $q = "select * from request where email='$em1' ";
                     $rexist = mysqli_query($connection,$q) or die("Error1");
                       
                       
                          while ($arr = mysqli_fetch_array($rexist)) {
                            $rid1 = $arr['reqid'];

                    
                    
                    
                    include "myconnection.php";
                    $qins="select * from dangue where reqid='$rid1'";
                    $resultins=mysqli_query($connection,$qins);
                    while($arr=mysqli_fetch_array($resultins))
                    {
                    
                    ?>
                    
                    <form method="post" action="reqdangue.php" name="frmlab" class="form-sample">
					
					 <div class="row">
                         <table width=600 align="center">
                         <tr align="center"><td colspan=4><b><u>Dangue</u></b></td></tr>
                         <tr>
                            <td>Email</td>
                            <td><?php echo $arr['email'] ?></td>
                            
                        </tr>    
                        <tr>
                            <td>Reqid</td>
                            <td><?php echo $arr['reqid'] ?></td>
                            
                        </tr>    
                        <tr>
                            <td>Haemoglobin</td>
                            <td><?php echo $arr['haemoglobin'] ?></td>
                            <td>g/dl</td>
                            <td>13-17</td>

                        </tr>    
                        <tr>
                            <td>Total WBC Count</td>
                            <td><?php echo $arr['totalwbccount'] ?></td>
                            <td>/ul</td>
                            <td>4000-11000</td>
                        </tr>  
                        <tr>
                            <td>Platelet</td>
                            <td><?php echo $arr['platelet'] ?></td>
                            <td>/ul</td>
                            <td>150000-450000</td>
                        </tr>      
                        <tr>
                            <td>RBC Count</td>
                            <td><?php echo $arr['rbccount'] ?></td>
                            <td>million/cumm</td>
                            <td>4.6-6.2</td>
                        </tr>   
                        <tr>
                            <td colspan=3><b><u>Blood Indices</u></b></td>
                        </tr>      
                        <tr>
                            <td>HCT(PCV)</td>
                            <td><?php echo $arr['hct(pcv)'] ?></td>
                            <td>%</td>
                            <td>40-54</td>
                        </tr>
                        <tr>
                            <td>MCV</td>
                            <td><?php echo $arr['mcv'] ?></td>
                            <td>fl</td>
                            <td>80-100</td>
                        </tr>
                        <tr>
                            <td>MCH</td>
                            <td><?php echo $arr['mch'] ?></td>
                            <td>pg</td>
                            <td>27-34</td>
                        </tr>
                        <tr>
                            <td>MCHC</td>
                            <td><?php echo $arr['mchc'] ?></td>
                            <td>g/dl</td>
                            <td>30-36</td>
                        </tr>
                        <tr>
                            <td><b><u>Differential Count</u></b></td>
                            
                          
</tr>
                           
                       <tr>
                            <td></td>
                            <td><b>Result</b></td>
                            <td><b>Unit</b></td>
                            <td><b>Reference Interval</b></td>
</tr>
                        <tr>
                            <td>Neutrophil</td>
                            <td><?php echo $arr['neutrophil'] ?> </td>
                            <td>%</td>
                            <td>50-70</td>
                            
                        </tr>
                        
                        <tr>
                            <td>Lymphocyte</td>
                            <td><?php echo $arr['lymphocyte'] ?> </td>
                            <td>%</td>
                            <td>20-40</td>
                            
                        </tr>
                        <tr>
                            <td>Monocyte</td>
                            <td><?php echo $arr['monocyte'] ?> </td>
                            <td>%</td>
                            <td>3-6</td>
                            
                        </tr>
                        </table>
                       
                      </div> 
                    </form>
                    <?php 
                    }
                }
                    ?>
                  </div>
                  <?php
                  echo "<a align=center href=./admin/".$rid1.".pdf>Download</a>";
               ?>
                  </div>
              </div>
            </div>
          </div>
       <!-- Start Footer -->
	
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
</html>
