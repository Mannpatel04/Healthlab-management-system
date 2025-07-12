<?php
session_start();
include "secadm.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Panel - HealthLab</title>

    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
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
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="assets/images/faces-clipart/logo2.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Lab</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href=logout.php>
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
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
            <div class="page-header">
              <h3 class="page-title"> Blood Count </h3>
              
            </div>
            <div class="row">
                    
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <?php
                    $em=$_GET['email'];
                    $reqid=$_GET['reqid'];
                    ?>
                    
                    <form method="post" action="reqbloodcount.php" name="frmlab" class="form-sample">
					
					 <div class="row">
                         <table width=600>
                         <tr>
                            <td>Email</td>
                            <td><input type="email" name="txtem"  class="form-control" value=<?php echo $em; ?>></td>
                            <input type=hidden name=txtrid value=<?php echo $reqid; ?>>
                        </tr>    
                        <tr>
                            <td>Haemoglobin</td>
                            <td><input type="text" name="txthm"  class="form-control" required/></td>
                            <td>g/dl</td>
                            <td>13-17</td>

                        </tr>    
                        <tr>
                            <td>Total WBC Count</td>
                            <td><input type="text" name="txtwbc"  class="form-control" required/></td>
                            <td>/ul</td>
                            <td>4000-11000</td>
                        </tr>  
                        <tr>
                            <td>Platelet</td>
                            <td><input type="text" name="txtplat"  class="form-control" required/></td>
                            <td>/ul</td>
                            <td>150000-450000</td>
                        </tr>      
                        <tr>
                            <td>RBC Count</td>
                            <td><input type="text" name="txtrbc"  class="form-control" required/></td>
                            <td>million/cumm</td>
                            <td>4.6-6.2</td>
                        </tr>   
                        
                        <tr>
                          <td>
                        <div class="row">
                        <div class="col-md-12" align="center">
                       <button type="submit" class="btn btn-primary btn-fw">Ok</button>
						 </div>
</td>                   
</tr>
                        </table>
                       
                      </div>
					  
					  
                    
                      
                     
                    
                    
                      
                      
                      
					  
					   
					  
					   
                    </form>
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
        </div>

      </div>

    </div>
 
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/select2/select2.min.js"></script>
    <script src="assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>

    <script src="assets/js/file-upload.js"></script>
    <script src="assets/js/typeahead.js"></script>
    <script src="assets/js/select2.js"></script>

  </body>
</html>