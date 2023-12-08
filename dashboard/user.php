<?php

session_start();

$_SESSION['username'] = ['pwdadmin', 'rm.adalid'];
$_SESSION['userType'] = ['admin'];

require_once('../controller/connection/connection.php');

if (isset($_GET['id'])){
  $id=$_GET['id'];
  $delete=mysqli_query($conn,"DELETE FROM 'user' WHERE 'id'='$id'");
}

$query = "SELECT * FROM user";
$result = mysqli_query($conn,$query);

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
          <span style="margin-left:15%">Admin</span>
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="">
            <a href="./dashboard.php">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="dropdown-btn 1 active">
            <a href="./user.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>Users</p>
            </a>
          </li>
          <li class="dropdown-menu-md-right">
            <a style="margin-bottom:3% !important;" href="./benefits.php">
            <i class="now-ui-icons location_map-big dropdown-menu-md-right"></i>
            <p>Benefits </p></a>
          </li>
          <li class="dropdown-menu-md-right">
            <a style="margin-bottom:3% !important;" href="./announcement.php">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Announcement</p>
            </a>
          </li>
          <li class="dropdown-menu-md-right">
            <a style="margin-bottom:3% !important;" href="./reports.php">
              <i class="now-ui-icons files_single-copy-04 dropdown-menu-md-right"></i>
              <p>Generate Report </p>
            </a>
          </li>
          <li class="dropdown-menu-md-right">
            <a href="./registerForStaff.php" style="margin-bottom:3% !important;">
              <i class="now-ui-icons now-ui-icons tech_laptop"></i>
              <p>Staff Registration</p>
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
            <a class="navbar-brand" href="#pablo">User Lists</a>
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
          <div class="col">
            <div class="card">
              <div class="card-header">
                <h5>User Lists</h5>
              </div>
              <div class="card-body">
                <table class="table table-bordered text-center">
                  <tr class="bg-dark text-white">
                    <td>User ID</td>
                    <td>Last Name</td>
                    <td>First Name</td>
                    <td>Email</td>
                    <td>Actions</td>
                  </tr>
                  <tr>
                    <?php

                        while($row = mysqli_fetch_assoc($result))
                        {
                    ?>

                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['lastName']; ?></td>
                        <td><?php echo $row['firstName']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td>
                          <form action="../controller/deleteAnnouncementController.php" method="post">
                            <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                                <i class="now-ui-icons ui-2_settings-90"></i>
                            </button>
                              <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                              <button type="submit" rel="tooltip" class="btn btn-danger btn-sm btn-icon" onclick="return confirm('Are you sure you want to delete this user?');">
                                  <i class="now-ui-icons ui-1_simple-remove"></i>
                              </button>
                            </form>
                        </td>
                        
                </tr>
                <?php
                    }

                ?>

                </table>
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
  <!--DataTables.js-->
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
</body>
</html>