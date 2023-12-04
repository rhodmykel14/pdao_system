<?php

session_start();

$_SESSION['username'] = ['pwdstaff'];
$_SESSION['userType'] = ['staff'];


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
                <li class="breadcrumb-item"><a href="#">User Lists</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit PWD</li>
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
      <!-- Edit PWD -->
      <div class="content">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">PWD Information</h5>
                    </div>
                    <div class="card-body">
                      <?php
                        if (isset($_GET['id'])) {
                            $pwdID = $_GET['id'];
                            $updateQuery = "SELECT * FROM pwd WHERE id = '$pwdID' ";
                            $updateResult = mysqli_query($conn, $updateQuery);

                            if (!$updateResult) {
                                die("Query failed: " . mysqli_error($conn));
                            }

                            while ($row = mysqli_fetch_assoc($updateResult)) {
                        ?>
                        <form action="../controller/updatePwdController.php" method="POST">
                          <input type="hidden" name="pwdID" value="<?= $pwd['id']; ?>" /> 
                          <div class="row">
                              <div class="col">
                                  <div class="form-check form-check-radio">
                                      <label class="form-check-label">
                                          <input class="form-check-input" type="radio" name="accountType" id="new" value="new" <?php echo ($pwd['accountType'] == 'new') ? 'checked' : ''; ?>>
                                          New Applicant
                                          <span class="form-check-sign"></span>
                                      </label>
                                      <label class="form-check-label">
                                          <input class="form-check-input" type="radio" name="accountType" id="renewal" value="renewal" <?php echo ($pwd['accountType'] == 'renewal') ? 'checked' : ''; ?>>
                                          Renewal
                                          <span class="form-check-sign"></span>
                                      </label>
                                  </div>                       
                              </div>                       
                              <div class="col-md-5 pr-1">
                                <div class="form-group">
                                    <label for="pwdNumber">Person with Disability Number</label>
                                    <input type="text" class="form-control" id="pwdNumber" name="pwdNumber" placeholder="RR-PPMM-BBB-NNNNNNN" value="<?php echo $result['name']; ?>" readonly>
                                </div>
                              </div>
                              <div class="col">
                                  <div class="form-group">
                                      <label for="dateApplied">Date Applied</label>
                                      <input type="date" class="form-control" id="dateApplied" name="dateApplied" placeholder="date" value="<?php echo $result['dateApplied']; ?>" readonly>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4 pr-1">
                              <div class="form-group">
                                <label for="pwd">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo $result['lastName']; ?>" placeholder="" >
                              </div>
                            </div>
                            <div class="col-md-4 px-1">
                              <div class="form-group">
                                <label for="pwd">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" value="<?= $pwd['firstName'];?>" placeholder="" >
                              </div>
                            </div>
                            <div class="col-md-4 pl-1">
                              <div class="form-group">
                                <label for="pwd">Middle Name</label>
                                <input type="text" class="form-control" id="middleName" name="middleName" value="<?= $pwd['middleName'];?>" placeholder="" >
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4 pr-1">
                              <div class="form-group">
                                <label for="pwd">Suffix</label>
                                <input type="text" class="form-control" id="suffix" name="suffix" value="<?= $pwd['suffix'];?>" placeholder="" >
                              </div>
                            </div>
                            <div class="col-md-4 px-1">
                              <div class="form-group">
                                <label for="pwd">Date of Birth</label>
                                <input type="date" class="form-control" id="birthDate" name="birthDate" value="<?= $pwd['birthDate'];?>" placeholder="dob">
                              </div>
                            </div>
                            <div class="col-md-4 pl-1">
                              <div class="form-group">
                              <label for="gender">Sex</label>
                              <select class="form-control" id="gender" name="gender">
                                  <option <?php echo ($pwd['gender'] == 'Male') ? 'selected' : ''; ?>>Male</option>
                                  <option <?php echo ($pwd['gender'] == 'Female') ? 'selected' : ''; ?>>Female</option>
                              </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label for="civilStatus">Civil Status</label>
                                <select class="form-control" id="civilStatus" name="civilStatus">
                                    <option <?php echo ($pwd['civilStatus'] == 'Single') ? 'selected' : ''; ?>>Single</option>
                                    <option <?php echo ($pwd['civilStatus'] == 'Separated') ? 'selected' : ''; ?>>Separated</option>
                                    <option <?php echo ($pwd['civilStatus'] == 'Cohabitation (live-in)') ? 'selected' : ''; ?>>Cohabitation (live-in)</option>
                                    <option <?php echo ($pwd['civilStatus'] == 'Married') ? 'selected' : ''; ?>>Married</option>
                                    <option <?php echo ($pwd['civilStatus'] == 'Widow/er') ? 'selected' : ''; ?>>Widow/er</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 pr-1">
                              <div class="form-group">
                                <label for="pwd">Type of Disability</label>
                                <select class="form-control" id="disabilityType" name="disabilityType">
                                  <option selected>Select Type</option>
                                  <option <?php echo ($pwd['disabilityType'] == 'Deaf or Hard of Hearing') ? 'selected' : ''; ?>>Deaf or Hard of Hearing</option>
                                  <option <?php echo ($pwd['disabilityType'] == 'Intellectual Disability') ? 'selected' : ''; ?>>Intellectual Disability</option>
                                  <option <?php echo ($pwd['disabilityType'] == 'Learning Disability') ? 'selected' : ''; ?>>Learning Disability</option>
                                  <option <?php echo ($pwd['disabilityType'] == 'Mental Disability') ? 'selected' : ''; ?>>Mental Disability</option>
                                  <option <?php echo ($pwd['disabilityType'] == 'Physical Disability') ? 'selected' : ''; ?>>Physical Disability</option>
                                  <option <?php echo ($pwd['disabilityType'] == 'Psychosocial Disability') ? 'selected' : ''; ?>>Psychosocial Disability</option>
                                  <option <?php echo ($pwd['disabilityType'] == 'Speach and Language Impairment') ? 'selected' : ''; ?>>Speach and Language Impairment</option>
                                  <option <?php echo ($pwd['disabilityType'] == 'Visual Disability') ? 'selected' : ''; ?>>Visual Disability</option>
                                  <option <?php echo ($pwd['disabilityType'] == 'Cancer (RA 11215)') ? 'selected' : ''; ?>>Cancer (RA 11215)</option>
                                  <option <?php echo ($pwd['disabilityType'] == 'Rare Disease (RA 10747)') ? 'selected' : ''; ?>>Rare Disease (RA 10747)</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6 pl-1">
                              <div class="form-group">
                                <label for="pwd">Cause of Disability</label>
                                <select class="form-control" id="disabilityCause" name="disabilityCause">
                                  <option selected>Select Cause</option>
                                  <option <?php echo ($pwd['disabilityCause'] == 'Autism') ? 'selected' : ''; ?>>Autism</option>
                                  <option <?php echo ($pwd['disabilityCause'] == 'ADHD') ? 'selected' : ''; ?>>ADHD</option>
                                  <option <?php echo ($pwd['disabilityCause'] == 'Down Syndrome') ? 'selected' : ''; ?>>Down Syndrome</option>
                                  <option <?php echo ($pwd['disabilityCause'] == 'Chronic Illness') ? 'selected' : ''; ?>>Chronic Illness</option>
                                  <option <?php echo ($pwd['disabilityCause'] == 'Cerebral Palsy') ? 'selected' : ''; ?>>Cerebral Palsy</option>
                                  <option <?php echo ($pwd['disabilityCause'] == 'Injury') ? 'selected' : ''; ?>>Injury</option>
                                  <option <?php echo ($pwd['disabilityCause'] == 'Others') ? 'selected' : ''; ?>>Others</option>
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
                                <label for="pwd">House No. and Street</label>
                                <input type="text" class="form-control" id="houseNumber" name="houseNumber" value="<?= $pwd['houseNumber'];?>" placeholder="House No. & Street">
                              </div>
                            </div>
                            <div class="col-md-6 pl-1">
                              <div class="form-group">
                                <label for="pwd">Barangay</label>
                                <input type="text" class="form-control" id="barangay" name="barangay" value="<?= $pwd['barangay'];?>" placeholder="Barangay">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4 pr-1">
                              <div class="form-group">
                                <label>City / Municipality</label>
                                <input type="text" class="form-control" id="city" name="city" value="<?= $pwd['city'];?>" placeholder="City">
                              </div>
                            </div>
                            <div class="col-md-4 px-1">
                              <div class="form-group">
                                <label>Province</label>
                                <input type="text" class="form-control" id="province" name="province" value="<?= $pwd['province'];?>" placeholder="Province">
                              </div>
                            </div>
                            <div class="col-md-4 pl-1">
                              <div class="form-group">
                                <label> </label>
                                <input type="number" class="form-control" id="region" name="region" value="<?= $pwd['region'];?>" placeholder="Region">
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
                                <input type="number" class="form-control" id="landlineNumber" name="landlineNumber" value="<?= $pwd['landlineNumber'];?>" placeholder="Landline N">
                              </div>
                            </div>
                            <div class="col-md-4 px-1">
                              <div class="form-group">
                                <label>Mobile Number</label>
                                <input type="number" class="form-control" id="mobileNumber" name="mobileNumber" value="<?= $pwd['mobileNumber'];?>" placeholder="Mobile No">
                              </div>
                            </div>
                            <div class="col-md-4 pl-1">
                              <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?= $pwd['email'];?>" placeholder="Email">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4 pr-1">
                              <div class="form-group">
                                <label for="pwd">Educational Attainment</label>
                                <select class="form-control" id="educationalAttainment" name="educationalAttainment">
                                  <option selected>Select Attainment</option>
                                  <option <?php echo ($pwd['educationalAttainment'] == 'None') ? 'selected' : ''; ?>>None</option>
                                  <option <?php echo ($pwd['educationalAttainment'] == 'Kindergarten') ? 'selected' : ''; ?>>Kindergarten</option>
                                  <option <?php echo ($pwd['educationalAttainment'] == 'Elementary') ? 'selected' : ''; ?>>Elementary</option>
                                  <option <?php echo ($pwd['educationalAttainment'] == 'Junior High School') ? 'selected' : ''; ?>>Junior High School</option>
                                  <option <?php echo ($pwd['educationalAttainment'] == 'Senior High School') ? 'selected' : ''; ?>>Senior High School</option>
                                  <option <?php echo ($pwd['educationalAttainment'] == 'College') ? 'selected' : ''; ?>>College</option>
                                  <option <?php echo ($pwd['educationalAttainment'] == 'Vocational / Technical') ? 'selected' : ''; ?>>Vocational / Technical</option>
                                  <option <?php echo ($pwd['educationalAttainment'] == 'Post Graduate') ? 'selected' : ''; ?>>Post Graduate</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4 px-1">
                              <div class="form-group">
                                <label for="pwd">Status of Employment</label>
                                <select class="form-control" id="employmentStatus" name="employmentStatus">
                                  <option selected>Select Status</option>
                                  <option <?php echo ($pwd['employmentStatus'] == 'Employed') ? 'selected' : ''; ?>>Employed</option>
                                  <option <?php echo ($pwd['employmentStatus'] == 'Unemployed') ? 'selected' : ''; ?>>Unemployed</option>
                                  <option <?php echo ($pwd['employmentStatus'] == 'Self-Employed') ? 'selected' : ''; ?>>Self-Employed</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4 pl-1">
                              <div class="form-group">
                                <label for="pwd">Category of Employment</label>
                                <select class="form-control" id="employmentCategory" name="employmentCategory">
                                  <option selected>Select Category</option>
                                  <option <?php echo ($pwd['employmentCategory'] == 'Government') ? 'selected' : ''; ?>>Government</option>
                                  <option <?php echo ($pwd['employmentCategory'] == 'Private') ? 'selected' : ''; ?>>Private</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 pr-1">
                              <div class="form-group">
                                <label for="pwd">Types of Employment</label>
                                <select class="form-control" id="employmentType" name="employmentType">
                                  <option selected>Select Type</option>
                                  <option <?php echo ($pwd['employmentType'] == 'Permanent / Regular') ? 'selected' : ''; ?>>Permanent / Regular</option>
                                  <option <?php echo ($pwd['employmentType'] == 'Seasonal') ? 'selected' : ''; ?>>Seasonal</option>
                                  <option <?php echo ($pwd['employmentType'] == 'Casual') ? 'selected' : ''; ?>>Casual</option>
                                  <option <?php echo ($pwd['employmentType'] == 'Emergency') ? 'selected' : ''; ?>>Emergency</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6 pl-1">
                              <div class="form-group">
                                <label for="pwd">Occupation</label>
                                <select class="form-control" id="occupation" name="occupation">
                                  <option selected>Select Occupation</option>
                                  <option <?php echo ($pwd['occupation'] == 'Managers') ? 'selected' : ''; ?>>Managers</option>
                                  <option <?php echo ($pwd['occupation'] == 'Professionals') ? 'selected' : ''; ?>>Professionals</option>
                                  <option <?php echo ($pwd['occupation'] == 'Technicians and Associate Professionals') ? 'selected' : ''; ?>>Technicians and Associate Professionals</option>
                                  <option <?php echo ($pwd['occupation'] == 'Clerical Support Workers') ? 'selected' : ''; ?>>Clerical Support Workers</option>
                                  <option <?php echo ($pwd['occupation'] == 'Service and Sales Workers') ? 'selected' : ''; ?>>Service and Sales Workers</option>
                                  <option <?php echo ($pwd['occupation'] == 'Skilled Agricultural, Forestry and Fishery Workers') ? 'selected' : ''; ?>>Skilled Agricultural, Forestry and Fishery Workers</option>
                                  <option <?php echo ($pwd['occupation'] == 'Craft and Related Trade Workers') ? 'selected' : ''; ?>>Craft and Related Trade Workers</option>
                                  <option <?php echo ($pwd['occupation'] == 'Plant and Machine Operators and Assemblers') ? 'selected' : ''; ?>>Plant and Machine Operators and Assemblers</option>
                                  <option <?php echo ($pwd['occupation'] == 'Elementary Occupations') ? 'selected' : ''; ?>>Elementary Occupations</option>
                                  <option <?php echo ($pwd['occupation'] == 'Armed Forces Occupations') ? 'selected' : ''; ?>>Armed Forces Occupations</option>
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
                                <label for="pwd">Organization Affiliated</label>
                                <input type="text" class="form-control" id="orgAffiliated" name="orgAffiliated" value="<?= $pwd['orgAffiliated'];?>" placeholder="">
                              </div>
                            </div>
                            <div class="col-md-6 pl-1">
                              <div class="form-group">
                                <label for="pwd">Contact Person</label>
                                <input type="text" class="form-control" id="orgContactPerson" name="orgContactPerson" value="<?= $pwd['orgContactPerson'];?>" placeholder="">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 pr-1">
                              <div class="form-group">
                                <label for="pwd">Office Address</label>
                                <input type="text" class="form-control" id="orgOfficeAddress" name="orgOfficeAddress" value="<?= $pwd['orgOfficeAddress'];?>" placeholder="">
                              </div>
                            </div>
                            <div class="col-md-6 pl-1">
                              <div class="form-group">
                                <label for="pwd">Contact Number</label>
                                <input type="number" class="form-control" id="orgContactNumber" name="orgContactNumber" value="<?= $pwd['orgContactNumber'];?>" placeholder="">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <h5 class="col-md-6 pr-1">ID Reference Number</h5>
                          </div>
                          <div class="row">
                            <div class="col-md-4 pr-1">
                              <div class="form-group">
                                <label for="pwd">SSS Number</label>
                                <input type="text" class="form-control" id="sssNumber" name="sssNumber" value="<?= $pwd['sssNumber'];?>" placeholder="" >
                              </div>
                            </div>
                            <div class="col-md-4 px-1">
                              <div class="form-group">
                                <label for="pwd">GSIS Number</label>
                                <input type="text" class="form-control" id="gsisNumber" name="gsisNumber" value="<?= $pwd['gsisNumber'];?>" placeholder="" >
                              </div>
                            </div>
                            <div class="col-md-4 pl-1">
                              <div class="form-group">
                                <label for="pwd">PAG-IBIG Number</label>
                                <input type="text" class="form-control" id="pagibigNumber" name="pagibigNumber" value="<?= $pwd['pagibigNumber'];?>" placeholder="" >
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4 pr-1">
                              <div class="form-group">
                                <label for="pwd">PhilSys No.</label>
                                <input type="text" class="form-control" id="philsysNumber" name="philsysNumber" value="<?= $pwd['philsysNumber'];?>" placeholder="" >
                              </div>
                            </div>
                            <div class="col-md-4 px-1">
                              <div class="form-group">
                                <label for="pwd">PhilHealth No.</label>
                                <input type="text" class="form-control" id="philhealthNumber" name="philhealthNumber" value="<?= $pwd['philhealthNumber'];?>" placeholder="" >
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <h5 class="col-md-6 pr-1">Family Background</h5>
                          </div>
                          <div class="row">
                            <div class="col-md-4 pr-1">
                              <div class="form-group">
                                <label for="pwd">Father's Name</label>
                                <input type="text" class="form-control" id="fathersName" name="fathersName" value="<?= $pwd['fathersName'];?>" placeholder="Last Name, First Name, M.I." >
                              </div>
                            </div>
                            <div class="col-md-4 px-1">
                              <div class="form-group">
                                <label for="pwd">Mother's Name</label>
                                <input type="text" class="form-control" id="mothersName" name="mothersName" value="<?= $pwd['mothersName'];?>" placeholder="Last Name, First Name, M.I." >
                              </div>
                            </div>
                            <div class="col-md-4 pl-1">
                              <div class="form-group">
                                <label for="pwd">Guardian's Name</label>
                                <input type="text" class="form-control" id="guardiansName" name="guardiansName" value="<?= $pwd['guardiansName'];?>" placeholder="Last Name, First Name, M.I." >
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <h5 class="col-md-6 pr-1">Accomplished By:</h5>
                          </div>
                          <div class="row">
                            <div class="col-md-4 pr-1">
                              <div class="form-group">
                                <label for="pwd">Applicant</label>
                                <input type="text" class="form-control" id="applicantName" name="applicantName" value="<?= $pwd['applicantName'];?>" placeholder="Last Name, First Name, M.I." >
                              </div>
                            </div>
                            <div class="col-md-4 px-1">
                              <div class="form-group">
                                <label for="pwd">Guardian</label>
                                <input type="text" class="form-control" id="guardiansName_2" name="guardiansName_2" value="<?= $pwd['guardiansName_2'];?>" placeholder="Last Name, First Name, M.I." >
                              </div>
                            </div>
                            <div class="col-md-4 pl-1">
                              <div class="form-group">
                                <label for="pwd">Representative</label>
                                <input type="text" class="form-control" id="representativeName" name="representativeName" value="<?= $pwd['representativeName'];?>" placeholder="Last Name, First Name, M.I." >
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                  <label for="pwd">Status:</label>
                                        <select class="form-control" id="pwdStatus" name="pwdStatus">
                                            <option value="Active" <?php echo ($row['pwdStatus'] == 'Active') ? 'selected' : ''; ?>>Active</option>
                                            <option value="Inactive" <?php echo ($row['pwdStatus'] == 'Inactive') ? 'selected' : ''; ?>>Inactive</option>
                                            <option value="Deceased" <?php echo ($row['pwdStatus'] == 'Deceased') ? 'selected' : ''; ?>>Deceased</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <button class="btn btn-primary" type="submit" name="updatePWDUser">Submit</button>
                                </div>
                            </div>
                        </form>
                        <?php
                            }
                        } else {
                            echo "<h4>No ID Provided</h4>";
                        }
                        ?>
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