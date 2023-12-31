<?php

session_start();

$_SESSION['username'] = ['pwdstaff'];
$_SESSION['userType'] = ['staff'];

require_once('../controller/connection/connection.php');



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Now UI Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
           
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          PDAO SYSTEM<br>
          <span style="margin-left:15%">Staff</span>
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="dropdown-btn 1 active">
            <a href="./staff_pwdUser.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>PWD Users</p>
            </a>
          </li>
          <li class="dropdown-menu-md-right">
            <a style="margin-bottom:3% !important;" href="./staff_announcement.php">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Announcement</p>
            </a>
          </li>

          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="staff_pwdUser.php">User Lists</a></li>
                <li class="breadcrumb-item active" aria-current="page">View PWD</li>
              </ol>
            </nav>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Profile</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <!--<a class="dropdown-item" href="admin_profile.php">Profile</a>-->
                  <a class="dropdown-item" href="change_password.php">Change Password</a>
                  <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">PWD Information</h5>
              </div>
              <div class="card-body">

                <?php 
                if(isset($_GET['id']))
                {
                  $id = mysqli_real_escape_string($conn, $_GET['id']);
                  $query = "SELECT * FROM `pwd` WHERE id='$id' ";
                  $query_run = mysqli_query($conn, $query);

                  if(mysqli_num_rows($query_run) > 0)
                  {
                      $pwd = mysqli_fetch_array($query_run);
                      ?>
                      <p>
                        <b>Person with Disability Number: </b><?= $pwd['pwdNumber']; ?><br>
                        <hr>
                        <b>Last Name: </b> <?= $pwd['lastName']; ?> <br>
                        <b>First Name: </b> <?= $pwd['firstName']; ?> <br>
                        <b>Middle Name: </b> <?= $pwd['middleName']; ?> <br>
                        <hr>
                        <b>Gender: </b> <?= $pwd['gender']; ?> <br>
                        <b>Civil Status: </b> <?= $pwd['civilStatus']; ?> <br>
                        <b>Educational Attainment: </b> <?= $pwd['educationalAttainment']; ?> <br>
                        <hr>
                        <b>Address: </b> <?= $pwd['houseNumber']; ?>, 
                        <?= $pwd['barangay']; ?>,
                        <?= $pwd['city']; ?>,
                        <?= $pwd['province']; ?>, Region <?= $pwd['region']; ?> <br>
                        <hr>
                        <b>Father's Name: </b> <?= $pwd['fathersName']; ?><br>
                        <b>Mother's Name: </b> <?= $pwd['mothersName']; ?><br>
                        <b>Guardians's Name: </b> <?= $pwd['guardiansName']; ?><br>
                        <hr>
                        <b>Landline Number: </b> <?= $pwd['landlineNumber']; ?><br>
                        <b>Mobile Number: </b> <?= $pwd['mobileNumber']; ?><br>
                        <b>Email Address: </b> <?= $pwd['email']; ?><br>
                        <hr>
                      </p>
                      <?php
                  }
                  else 
                  {
                      echo "<h4> Wala </h4>";
                  }
                }
                ?>
                </div>
              </div>
            </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="../assets/img/bg5.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="../assets/img/pdao_logo.jpg" alt="...">
                    <h5 class="title"><?= $pwd['firstName'], " ", substr($pwd['middleName'], 0, 1),". ", $pwd['lastName']; ?></h5>
                  </a>
                </div>
                <p>
                    <b>Disability Type:</b> <?= $pwd['disabilityType']; ?> <br>
                    <b>Account Type:</b> <?= $pwd['accountType']; ?>
                    <hr>
                <p>
                  <b>Date Applied: </b> <?= $pwd['dateApplied']; ?> 
                  <hr>
                  <a href="" class="btn btn-success btn-sm">Print ID</a>
                </p>
                </p>
              </div>
              
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>
</html>