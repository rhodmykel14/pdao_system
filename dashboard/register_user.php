
<?php

session_start();

$_SESSION['username'] = 'pwd_user';
$_SESSION['userType'] = ['user'];

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
          <span style="margin-left:15%">User</span>
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="">
            <a href="./dashboard_user.php">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="dropdown-menu-md-right active">
            <a href="./register.php" style="margin-bottom:3% !important;">
              <i class="now-ui-icons now-ui-icons tech_laptop"></i>
              <p>Register</p>
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
            <a class="navbar-brand" href="#pablo">PWD Registration Form</a>
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
                <h5 class="title">PWD Information</h5>
              </div>
              <div class="card-body">
                <form action="../controller/registerPwdController.php" method="POST">
                  <div class="row">
                    <div class="col">
                      <div class="form-check form-check-radio">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="accountType" id="new_applicant" value="new" checked>
                            New Applicant
                            <span class="form-check-sign"></span>
                        </label>
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="accountType" id="renewal" value="renewal">
                            Renewal
                            <span class="form-check-sign"></span>
                        </label>
                      </div>                       
                    </div>
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                          <label for="pwd_user">Person with Disability Number</label>
                          <input type="text" class="form-control" id="pwdNumber" name="pwdNumber" placeholder="RR-PPMM-BBB-NNNNNNN" value="<?php echo $pwdIDNumber; ?>" readonly>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <label for="pwd_user" type="date_applied">Date Applied</label>
                        <input type="date" class="form-control" id="dateApplied" name="dateApplied" placeholder="date">
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label for="pwd_user">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" >
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label for="pwd_user">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" >
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="pwd_user">Middle Name</label>
                        <input type="text" class="form-control" id="middleName" name="middleName" placeholder="" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label for="pwd_user">Suffix</label>
                        <input type="text" class="form-control" id="suffix" name="suffix" placeholder="" >
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label for="pwd_user">Date of Birth</label>
                        <input type="date" class="form-control" id="birthDate" name="birthDate" placeholder="dob">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="pwd_user">Sex</label>
                        <select class="form-control" id="gender" name="gender">
                          <option selected>Select Gender</option>
                          <option id="male" name="0" value="0">Male</option>
                          <option id="female" name="1" value="1">Female</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label for="pwd_user">Civil Status</label>
                        <select class="form-control" id="civilStatus" name="civilStatus">
                          <option selected>Select Status</option>
                          <option id="single`" name="1" value="1">Single</option>
                          <option id="separated" name="2" value="2">Separated</option>
                          <option id="cohab" name="3" value="3">Cohabitation (live-in)</option>
                          <option id="married" name="4" value="4">Married</option>
                          <option id="widowed" name="5" value="5">Widow/er</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label for="pwd_user">Type of Disability</label>
                        <select class="form-control" id="disabilityType" name="disabilityType">
                          <option selected>Select Type</option>
                          <option id="deaf" name="deaf" value="1">Deaf or Hard of Hearling</option>
                          <option id="intel" name="intellectual" value="2">Intellectual Disability</option>
                          <option id="learning" name="learning" value="3">Learning Disability</option>
                          <option id="mental" name="mental" value="4">Mental Disability</option>
                          <option id="physical" name="physical" value="5">Physical Disability</option>
                          <option id="psycho" name="psycho" value="6">Psychosocial Disability</option>
                          <option id="speech" name="speech" value="7">Speach and Language Impairment</option>
                          <option id="visual" name="visual" value="8">Visual Disability</option>
                          <option id="cancer" name="cancer" value="9">Cancer (RA 11215)</option>
                          <option id="rared" name="rared" value="10">Rare Disease (RA 10747)</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="pwd_user">Cause of Disability</label>
                        <select class="form-control" id="disabilityCause" name="disabilityCause">
                          <option selected>Select Cause</option>
                          <option id="autism" name="autism" value="1">Autism</option>
                          <option id="adhd" name="adhd" value="2">ADHD</option>
                          <option id="downsyn" name="downsyn" value="3">Down Syndrome</option>
                          <option id="chronic" name="chronic" value="4">Chronic Illness</option>
                          <option id="cerebral" name="cerebral" value="5">Cerebral Palsy</option>
                          <option id="injury" name="injury" value="6">Injury</option>
                          <option id="others" name="others" value="7">Others</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <h5 class="col-md-6 pr-1">Resident</h5>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label for="pwd_user">House No. and Street</label>
                        <input type="text" class="form-control" id="houseNumber" name="houseNumber" placeholder="House No. & Street">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="pwd_user">Barangay</label>
                        <input type="text" class="form-control" id="barangay" name="barangay" placeholder="Barangay">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>City / Municipality</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="City">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Province</label>
                        <input type="text" class="form-control" id="province" name="province" placeholder="Province">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label> </label>
                        <input type="number" class="form-control" id="region" name="region" placeholder="Region">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <h5 class="col-md-6 pr-1">Contact Details</h5>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Landline Number</label>
                        <input type="number" class="form-control" id="landlineNumber" name="landlineNumber" placeholder="Landline N">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="number" class="form-control" id="mobileNumber" name="mobileNumber" placeholder="Mobile No">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label for="pwd_user">Educational Attainment</label>
                        <select class="form-control" id="educationalAttainment" name="educationalAttainment">
                          <option selected>Select Attainment</option>
                          <option id="none" name="none" value="1">None</option>
                          <option id="kinder" name="kinder" value="2">Kindergarten</option>
                          <option id="elem" name="elem" value="3">Elementary</option>
                          <option id="jhs" name="jhs" value="4">Junior High School</option>
                          <option id="shs" name="shs" value="5">Senior High School</option>
                          <option id="college" name="college" value="6">College</option>
                          <option id="voc" name="voc" value="7">Vocational / Technical</option>
                          <option id="postgrad" name="postgrad" value="8">Post Graduate</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label for="pwd_user">Status of Employment</label>
                        <select class="form-control" id="employmentStatus" name="employmentStatus">
                          <option selected>Select Status</option>
                          <option id="employed" name="employed" value="1">Employed</option>
                          <option id="unemployed" name="unemployed" value="2">Unemployed</option>
                          <option id="selfemployed" name="selfemployed" value="3">Self-Employed</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="pwd_user">Category of Employment</label>
                        <select class="form-control" id="employmentCategory" name="employmentCategory">
                          <option selected>Select Category</option>
                          <option id="government" name="government" value="1">Government</option>
                          <option id="private" name="private" value="2">Private</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label for="pwd_user">Types of Employment</label>
                        <select class="form-control" id="employmentType" name="employmentType">
                          <option selected>Select Type</option>
                          <option id="permanent" name="permanent" value="1">Permanent / Regular</option>
                          <option id="seasonal" name="seasonal" value="2">Seasonal</option>
                          <option id="casual" name="casual" value="3">Casual</option>
                          <option id="emergency" name="emergency" value="4">Emergency</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="pwd_user">Occupation</label>
                        <select class="form-control" id="occupation" name="occupation">
                          <option selected>Select Occupation</option>
                          <option id="managers" name="managers" value="1">Managers</option>
                          <option id="professional" name="professional" value="2">Professionals</option>
                          <option id="technician" name="technician" value="3">Technicians and Associate Professionals</option>
                          <option id="clerical" name="clerical" value="4">Clerical Support Workers</option>
                          <option id="service" name="service" value="5">Service and Sales Workers</option>
                          <option id="agri" name="agri" value="6">Skilled Agricultural, Forestry and Fishery Workers</option>
                          <option id="craft" name="craft" value="7">Crat and Related Trade Workers</option>
                          <option id="plant" name="plant" value="8">Plant and Machine Operators and Assemblers</option>
                          <option id="elementary" name="elementary" value="9">Elementary Occupations</option>
                          <option id="afo" name="afo" value="10">Armed Forces Occupations</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <h5 class="col-md-6 pr-1">Organization Information</h5>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label for="pwd_user">Organization Affiliated</label>
                        <input type="text" class="form-control" id="orgAffiliated" name="orgAffiliated" placeholder="">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="pwd_user">Contact Person</label>
                        <input type="text" class="form-control" id="orgContactPerson" name="orgContactPerson" placeholder="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label for="pwd_user">Office Address</label>
                        <input type="text" class="form-control" id="orgOfficeAddress" name="orgOfficeAddress" placeholder="">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="pwd_user">Contact Number</label>
                        <input type="number" class="form-control" id="orgContactNumber" name="orgContactNumber" placeholder="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <h5 class="col-md-6 pr-1">ID Reference Number</h5>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label for="pwd_user">SSS Number</label>
                        <input type="text" class="form-control" id="sssNumber" name="sssNumber" placeholder="" >
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label for="pwd_user">GSIS Number</label>
                        <input type="text" class="form-control" id="gsisNumber" name="gsisNumber" placeholder="" >
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="pwd_user">PAG-IBIG Number</label>
                        <input type="text" class="form-control" id="pagibigNumber" name="pagibigNumber" placeholder="" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label for="pwd_user">PhilSys No.</label>
                        <input type="text" class="form-control" id="philsysNumber" name="philsysNumber" placeholder="" >
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label for="pwd_user">PhilHealth No.</label>
                        <input type="text" class="form-control" id="philhealthNumber" name="philhealthNumber" placeholder="" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <h5 class="col-md-6 pr-1">Family Background</h5>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label for="pwd_user">Father's Name</label>
                        <input type="text" class="form-control" id="fathersName" name="fathersName" placeholder="Last Name, First Name, M.I." >
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label for="pwd_user">Mother's Name</label>
                        <input type="text" class="form-control" id="mothersName" name="mothersName" placeholder="Last Name, First Name, M.I." >
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="pwd_user">Guardian's Name</label>
                        <input type="text" class="form-control" id="guardiansName" name="guardiansName" placeholder="Last Name, First Name, M.I." >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <h5 class="col-md-6 pr-1">Accomplished By:</h5>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label for="pwd_user">Applicant</label>
                        <input type="text" class="form-control" id="applicantName" name="applicantName" placeholder="Last Name, First Name, M.I." >
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label for="pwd_user">Guardian</label>
                        <input type="text" class="form-control" id="guardiansName_2" name="guardiansName_2" placeholder="Last Name, First Name, M.I." >
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="pwd_user">Representative</label>
                        <input type="text" class="form-control" id="representativeName" name="representativeName" placeholder="Last Name, First Name, M.I." >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                        <div class="form-group">
                          <label for="pwd">Status</label>
                          <select class="form-control" id="pwdStatus" name="pwdStatus">
                            <option selected>Select Status</option>
                            <option id="employed" name="pwdStatus" value="Active">Active</option>
                            <option id="unemployed" name="pwdStatus" value="Inactive">Inactive</option>
                            <option id="selfemployed" name="pwdStatus" value="Deceased">Deceased</option>
                          </select>
                        </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <button class="btn btn-primary" type="submit" name="savePWDUser">Submit</button>
                    </div>
                  </div>
                </form>
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