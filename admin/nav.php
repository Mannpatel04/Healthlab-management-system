
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/logo6.jpg"/></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo6.jpg"/></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <?php
               if($_SESSION['role']=="Admin")
               {
                 $img="pic-2.png";
               }
               else if($_SESSION['role']=="Lab")
               {
                $img="logo2.jpg";
               }
               else
               {
                $img="pic-8.png";
               }
              
               echo "<img src=assets/images/faces-clipart/".$img."  width=201 height=251 class=img-xs rounded-circle>";
               ?>
                  <span class="count bg-success"></span>                </div>
                <div class="profile-name">
                <?php
                    $role=$_SESSION['role'];
                    include "myconnection.php";
                    if($role=="Admin")
					{
                  echo "<h5 class=mb-0 font-weight-normal>Admin</h5>";
                  echo "<span>Admin Member</span>";
          }
          else if($role=="Lab")
					{
            echo "<h5 class=mb-0 font-weight-normal>Lab</h5>";
            echo "<span>Lab Member</span>";
          }
          else
          {
            echo "<h5 class=mb-0 font-weight-normal>Collector</h5>";
            echo "<span>Collector Member</span>";
          }
          ?>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
               
               
                <a href="changepass.php" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="homepage.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
			  
<?php
if($_SESSION['role']=="Admin")
{
?>	  
		  <li class="nav-item menu-items">
            <a class="nav-link" href="createlab.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Create Lab</span>
            </a>
          </li>

		  
          <li class="nav-item menu-items">
            <a class="nav-link" href="createcollector.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Create Collector</span>
            </a>
          </li>
          <?php
}
          ?>
		  
     
		    
          <?php
if($_SESSION['role']=="Admin")
{
?>
		    <li class="nav-item menu-items">
            <a class="nav-link" href="managerequests.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Manage Requests</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="reporttype.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Create Report Type </span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="feedback.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">FeedBack</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="contactus.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Contact Message</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="subadmin.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Create Sub-admin</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">View Reports</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
			  <li class="nav-item"> <a class="nav-link" href="viewlabs.php">View Labs</a></li>
                <li class="nav-item"> <a class="nav-link" href="customer.php">Customer</a></li>
                <li class="nav-item"> <a class="nav-link" href="collector.php">Collector</a></li>
                <li class="nav-item"> <a class="nav-link" href="request.php">Request</a></li>
              </ul>
            </div>
          </li>
          <?php
}
          ?>

          <?php
if($_SESSION['role']=="Collector")
{
?>	 
<li class="nav-item menu-items">
            <a class="nav-link" href="myrequest.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">My Area Request</span>
            </a>
          </li>
<?php
}
?>
          <?php
if($_SESSION['role']=="Lab")
{
?>	 
          <li class="nav-item menu-items">
            <a class="nav-link" href="csample.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Collected Sample</span>
            </a>
          </li>
  <?php
  }
  ?>

           <li class="nav-item menu-items">
            <a class="nav-link" href="logout.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Logout</span>
            </a>
          </li>
</ul>
      </nav>