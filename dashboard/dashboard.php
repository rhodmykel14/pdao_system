<?php

  session_start();

  $_SESSION['username'] = ['pwdadmin', 'rm.adalid'];
  $_SESSION['userType'] = ['admin'];

  require_once('../controller/connection/connection.php');
  $query = "SELECT * FROM pwd";
  $result = mysqli_query($conn,$query);

  // View Query for Announcement and Benefits
  $announcementQuery = "SELECT * FROM announcement";
  $benefitQuery = "SELECT * FROM benefits";

  $announcementResult = mysqli_query($conn, $announcementQuery);
  $benefitResult = mysqli_query($conn, $benefitQuery);

  $allPWDQuery = "SELECT COUNT(*) as allPWDCount FROM pwd";
  $allPWDResult = mysqli_query($conn, $allPWDQuery);
  $allPWDCount = mysqli_fetch_assoc($allPWDResult)['allPWDCount'];

  // Count for new members
  $newMemberQuery = "SELECT COUNT(*) as newMemberCount FROM pwd WHERE accountType='new'";
  $newMemberResult = mysqli_query($conn, $newMemberQuery);
  $newMemberCount = mysqli_fetch_assoc($newMemberResult)['newMemberCount'];

  // Count for renewed members
  $renewedMemberQuery = "SELECT COUNT(*) as renewedMemberCount FROM pwd WHERE accountType='renewal'";
  $renewedMemberResult = mysqli_query($conn, $renewedMemberQuery);
  $renewedMemberCount = mysqli_fetch_assoc($renewedMemberResult)['renewedMemberCount'];

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
          <li class="active">
            <a href="./dashboard.php">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="dropdown-btn 1 ">
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
            <a class="navbar-brand" href="#pablo">Admin Dashboard</a>
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
        <!--
          <div class="row">
          <div class="col-md-6">
            <div class="card  card-tasks">
              <div class="card-header ">
                <h5 class="card-category">PWD Statistics</h5>
                <h4 class="card-title">Tasks</h4>
              </div>
              <div class="card-body ">
                <div class="table-full-width table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" checked>
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </td>
                        <td class="text-left">Sign contract for "What are conference organizers afraid of?"</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                            <i class="now-ui-icons ui-2_settings-90"></i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox">
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </td>
                        <td class="text-left">Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                            <i class="now-ui-icons ui-2_settings-90"></i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" checked>
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </td>
                        <td class="text-left">Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                            <i class="now-ui-icons ui-2_settings-90"></i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category">Announcement Lists</h5>
                <h4 class="card-title"> Employees Stats</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Country
                      </th>
                      <th>
                        City
                      </th>
                      <th class="text-right">
                        Salary
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          Dakota Rice
                        </td>
                        <td>
                          Niger
                        </td>
                        <td>
                          Oud-Turnhout
                        </td>
                        <td class="text-right">
                          $36,738
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Minerva Hooper
                        </td>
                        <td>
                          Curaçao
                        </td>
                        <td>
                          Sinaai-Waas
                        </td>
                        <td class="text-right">
                          $23,789
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Sage Rodriguez
                        </td>
                        <td>
                          Netherlands
                        </td>
                        <td>
                          Baileux
                        </td>
                        <td class="text-right">
                          $56,142
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Doris Greene
                        </td>
                        <td>
                          Malawi
                        </td>
                        <td>
                          Feldkirchen in Kärnten
                        </td>
                        <td class="text-right">
                          $63,542
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Mason Porter
                        </td>
                        <td>
                          Chile
                        </td>
                        <td>
                          Gloucester
                        </td>
                        <td class="text-right">
                          $78,615
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        -->
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Total of PWD</h5>
                <h4 class="card-title">New Applicants</h4>
                <div class="dropdown">
      
                
                </div>
              </div>
              <div class="card-body">
                <h1 style="text-align: center;"><?= $newMemberCount; ?></h1>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Total of PWD</h5>
                <h4 class="card-title">Renewed Applicants</h4>
                <div class="dropdown">
                </div>
              </div>
              <div class="card-body">
                <h1 style="text-align: center;"><?= $renewedMemberCount; ?></h1>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Total of PWD</h5>
                <h4 class="card-title">All Applicants</h4>
                <div class="dropdown">
                </div>
              </div>
              <div class="card-body">
                <h1 style="text-align: center;"><?= $allPWDCount; ?></h1>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category">View Announcement</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Event Name
                      </th>
                      <th>
                        Action
                      </th>
                    </thead>
                    <tbody>
                      <?php
                      if ($announcementResult && mysqli_num_rows($announcementResult) > 0) {
                        foreach ($announcementResult as $announcement) {
                      ?>
                          <tr>
                            <td><?= $announcement['announcementName']; ?></td>
                            <td>
                              <a data-toggle="modal" data-target="#myModal<?= $announcement['id']; ?>" class="btn btn-success btn-sm">Details</a>
                            </td>
                          </tr>
                      <?php
                        }
                      } else {
                        echo "<h5>No Record Found.</h5>";
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
                        <?php
                          // Reset the result pointer to the beginning
                          mysqli_data_seek($announcementResult, 0);

                          // Loop through the results again for modals
                          foreach ($announcementResult as $announcement) {
                        ?>
                          <div class="modal fade" id="myModal<?= $announcement['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="announcementdeets" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="announcementdeets">Event Details</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <b><?= $announcement['announcementName']; ?></b><hr />
                                  <p><b>Date: </b><?= $announcement['announcementDate']; ?><br />
                                  <b>Place: </b><?= $announcement['announcementPlace']; ?><br /> <br/>
                                  <b>Event Description:</b> </br>
                                  <?= $announcement['announcementDesc']; ?></p>
                                </div>
                              </div>
                            </div>
                          </div>
                        <?php
                          }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col md-6">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-category">View Benefits</h5>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Benefit Name
                        </th>
                        <th>
                          Description
                        </th>
                      </thead>
                      <tbody>
                        <?php
                        if ($benefitResult && mysqli_num_rows($benefitResult) > 0) {
                          while ($row = mysqli_fetch_assoc($benefitResult)) {
                        ?>
                            <tr>
                              <td><?= $row['benefitName']; ?></td>
                              <td><?= $row['benefitDescription']; ?></td>
                            </tr>
                        <?php
                          }
                        } else {
                          echo "<h5>No Benefit Record Found.</h5>";
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category">All PWD Member List</h5>
                <h4 class="card-title">Stats</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Last Name
                      </th>
                      <th>
                        First Name
                      </th>
                      <th>
                        Barangay
                      </th>
                      <th>
                        Disability Type
                      </th>
                      <th>
                        Date Applied
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                      <?php

                      while($row = mysqli_fetch_assoc($result))
                            {
                      ?>
                        <td>
                          <?php echo $row['lastName']; ?>
                        </td>
                        <td>
                          <?php echo $row['firstName']; ?>
                        </td>
                        <td>
                          <?php echo $row['barangay']; ?>
                        </td>
                        <td>
                          <?php echo $row['disabilityType']; ?>
                        </td>
                        <td>
                          <?php echo $row['dateApplied']; ?>
                        </td>
                        </tr>
                      <?php
                            }
                      ?>
                      
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
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
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
</body>

</html>