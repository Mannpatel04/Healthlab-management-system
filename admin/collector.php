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
  <link rel="shortcut icon" href="assets/images/symbol.ico" />
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
                  <img class="img-xs rounded-circle" src="assets/images/faces-clipart/pic-2.png" alt="">
                  <p class="mb-0 d-none d-sm-block navbar-profile-name">Admin</p>
                  <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                <h6 class="p-3 mb-0">Profile</h6>

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



          <div class="row ">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">List Of Active Collector</h4>
                  <div class="table-responsive">


                    <table class="table">
                      <thead>
                        <tr>
                          <th> Collector Name </th>
                          <th>Email</th>
                          <th>Address</th>
                          <th>Area</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        include "myconnection.php";
                        $q5 = "select * from collectorinformation where status='Active'";
                        $rexist5 = mysqli_query($connection, $q5) or die("Error");
                        $count = mysqli_num_rows($rexist5);
                        if ($count > 0) {
                          while ($arr2 = mysqli_fetch_array($rexist5)) {
                        ?>
                            <tr>

                              <td><?php echo $arr2['collectorname']; ?></td>
                              <td><?php echo $arr2['email']; ?></td>
                              <td><?php echo $arr2['address']; ?></td>
                              <td><?php echo $arr2['collectionarea']; ?></td>


                              <?php
                              echo "<td><a href=disablecol.php?collectorid=" . $arr2['collectorid'] . ">Disable</a></td>";
                              echo "<td><a href=editcol.php?collectorid=" . $arr2['collectorid'] . ">Edit</a></td>";
                              echo "<td><a href=deletecol.php?collectorid=" . $arr2['collectorid'] . ">Delete</a></td>";
                              ?>

                            </tr>
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


          <div class="row ">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">List Of Disable Collector</h4>
                  <div class="table-responsive">


                    <table class="table">
                      <thead>
                        <tr>
                          <th> Collector Name </th>
                          <th>Email</th>
                          <th>Address</th>
                          <th>Area</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        include "myconnection.php";
                        $q5 = "select * from collectorinformation where status='Disable'";
                        $rexist5 = mysqli_query($connection, $q5) or die("Error");
                        $count = mysqli_num_rows($rexist5);
                        if ($count > 0) {
                          while ($arr2 = mysqli_fetch_array($rexist5)) {
                        ?>
                            <tr>

                              <td><?php echo $arr2['collectorname']; ?></td>
                              <td><?php echo $arr2['email']; ?></td>
                              <td><?php echo $arr2['address']; ?></td>
                              <td><?php echo $arr2['collectionarea']; ?></td>


                              <?php
                              echo "<td><a href=Activecol.php?collectorid=" . $arr2['collectorid'] . ">Active</a></td>";
                              ?>

                            </tr>
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