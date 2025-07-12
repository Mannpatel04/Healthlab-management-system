<?php
session_start();
include "secadm.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Panel - HealthLab</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
	
	
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    <?php
include "nav.php";
?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
           
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                  <h6 class="p-3 mb-0">Projects</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-file-outline text-primary"></i>
                      </div>
                    </div>
                   
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-web text-info"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">UI Development</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-layers text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Testing</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all projects</p>
                </div>
              </li>
            
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="assets/images/faces-clipart/pic-8.png" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Collector</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
             
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
         
        
          
            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">List Of Request</h4>
                    <div class="table-responsive">
                    
					 
					  <table class="table">
                       
                        <tbody>

						 <?php
                         $r=$_GET['rid'];
                         $area1=$_SESSION['carea'];
                         
                           
						 include "myconnection.php";
					 $q="select request.reqid as rid ,request.*,labs.labid,labs.labname from request,labs where request.status='Pending' and request.labid=labs.labid and request.area='$area1' and request.reqid='$r'";
$rexist=mysqli_query($connection,$q) or die("Error1");
$count=mysqli_num_rows($rexist);
if($count>0)
{
while($arr=mysqli_fetch_array($rexist))
{
  $rid1=$arr['rid'];

?>
                        <tr>
                        <td>Req Date</td><td><?php echo $arr['reqdate']; ?></td>
                        </tr>
                        <tr>
                            <td>Lab Name</td><td><?php echo $arr['labname']; ?></td>
                        </tr>
                            <?php
                            $rid=$arr['reporttypeid'];
          $q1="select * from reporttype where reporttypeid='$rid'";
          $result1=mysqli_query($connection,$q1);
          while($arr1=mysqli_fetch_array($result1))
          {
            $rname=$arr1['reportname'];
          }
          $em=$arr['email'];
          $q2="select *from registration where email='$em'";
          $result2=mysqli_query($connection,$q2);
          while($arr2=mysqli_fetch_array($result2))
          {
            $area=$arr2['area'];
            $add=$arr2['address'];
          }
          echo "<form method=post action=reqpayment.php>";
                            ?>
                            <tr>
                                <td>Report Name</td><td><?php echo $rname; ?></td>
                            </tr>
                            <tr>
                            <td>Email</td><td><?php echo $arr['email']; ?></td>
                            </tr>
                            <tr>
                            <td>Area</td><td><?php echo $area; ?></td>
                            </tr>
                            <tr>
                            <td>Address</td><td><?php echo $add; ?></td>
                            </tr>
                            <?php
                            $qpay="select *from payment where reqid='$r'";
                            $resultpay=mysqli_query($connection,$qpay);
                            $count=mysqli_num_rows($resultpay);
                            if($count==0)
                          {
                           echo "<tr>";
                           echo "<td>Amount</td><td><input type=text name=txtamount placeholder=Enter Amount required></td>";
                           echo "</tr>";
                          }
                          ?>
                          <?php
                           $q1="select *from payment where reqid='$r'";
                           $result1=mysqli_query($connection,$q1);
                           $count=mysqli_num_rows($result1);
                           if($count==0)
                         {
                           echo "<tr align=center>";
                           echo "<input type=hidden name=txtrid value=".$r.">";
                           echo "<td colspan=2><input type=submit name=submit value='Pay now'></td>";
                           echo "</tr>";
                           echo "</form>";
                         }
                           else
                           {
                             echo "<td>Paid</td>";
                           }
                           ?>
                           <?php
                            $qcmp="select *from request where reqid='$r'";
                            $resultcmp=mysqli_query($connection,$qcmp);
                            $count=mysqli_num_rows($resultcmp);
                            if($count==0)
                          {
                             echo "<tr align=center>";
                            echo "<td><a href=complete.php?rid=".$r.">Complete</a></td>";
                             echo "</tr>";
                            echo "</tr>";
                          }
                          else
                          {
                          echo  "<td>completed</td>";
                          }
                          ?>

                                                    
                          
                          <?php
                         
					  }
					  }
           
					  ?>
                        </tbody>
                      </table>
					  
					 
                    </div>
                  </div>
                </div>
              </div>
            </div>


           

        
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Develope by Ritisha Dobariya & Prarthana Hirpara</span>

            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>