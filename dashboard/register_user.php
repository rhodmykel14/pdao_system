
<?php

session_start();

$_SESSION['username'] = 'pwd_user';
$_SESSION['userType'] = ['user'];

function generatePWDIDNumber($regionCode, $provinceCode, $municipalityCode, $barangayCode, $sequentialNo) {
  // Validate input codes
  if (!isValidCode($regionCode, 2) || !isValidCode($provinceCode, 2) ||
      !isValidCode($municipalityCode, 2) || !isValidCode($barangayCode, 3) ||
      !isValidCode($sequentialNo, 3)) {
      return "Invalid input codes.";
  }

  // Concatenate codes to form the PWD ID Number
  $pwdIDNumber = sprintf("%02d-%02d%02d-%03d-%07d", $regionCode, $provinceCode, $municipalityCode, $barangayCode, $sequentialNo);

  return $pwdIDNumber;
}

function isValidCode($code, $length) {
  // Validate code length and numeric format
  return is_numeric($code) && strlen($code) === $length;
}

// Example usage
$regionCode = 10;
$provinceCode = 03;
$municipalityCode = 03;
$barangayCode = 004;
$sequentialNo = 123;

$pwdIDNumber = generatePWDIDNumber($regionCode, $provinceCode, $municipalityCode, $barangayCode, $sequentialNo);

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
                            <input class="form-check-input" type="radio" name="accountType" id="new" value="new" checked>
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
                          <label for="pwd">Person with Disability Number</label>
                          <input type="text" class="form-control" id="pwdNumber" name="pwdNumber" placeholder="RR-PPMM-BBB-NNNNNNN" value="<?php echo $pwdIDNumber; ?>" readonly>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <label for="pwd" type="date_applied">Date Applied</label>
                        <input type="date" class="form-control" id="dateApplied" name="dateApplied" placeholder="date">
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label for="pwd">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" >
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label for="pwd">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" >
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="pwd">Middle Name</label>
                        <input type="text" class="form-control" id="middleName" name="middleName" placeholder="" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label for="pwd">Suffix</label>
                        <input type="text" class="form-control" id="suffix" name="suffix" placeholder="" >
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label for="pwd">Date of Birth</label>
                        <input type="date" class="form-control" id="birthDate" name="birthDate" placeholder="dob">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="pwd">Sex</label>
                        <select class="form-control" id="gender" name="gender">
                          <option selected>Select Gender</option>
                          <option id="male" name="gender" value="Male">Male</option>
                          <option id="female" name="gender" value="Female">Female</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label for="pwd">Civil Status</label>
                        <select class="form-control" id="civilStatus" name="civilStatus">
                          <option selected>Select Status</option>
                          <option id="single" name="civilStatus" value="Single">Single</option>
                          <option id="separated" name="civilStatus" value="Separated">Separated</option>
                          <option id="cohab" name="civilStatus" value="Cohabitation (live-in)">Cohabitation (live-in)</option>
                          <option id="married" name="civilStatus" value="Married">Married</option>
                          <option id="widowed" name="civilStatus" value="Widow/er">Widow/er</option>
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
                          <option id="deaf" name="disabilityType" value="Deaf or Hard of Hearling">Deaf or Hard of Hearling</option>
                          <option id="intel" name="disabilityType" value="Intellectual Disability">Intellectual Disability</option>
                          <option id="learning" name="disabilityType" value="Learning Disability">Learning Disability</option>
                          <option id="mental" name="disabilityType" value="Mental Disability">Mental Disability</option>
                          <option id="physical" name="disabilityType" value="Physical Disability">Physical Disability</option>
                          <option id="psycho" name="disabilityType" value="Psychosocial Disability">Psychosocial Disability</option>
                          <option id="speech" name="disabilityType" value="Speach and Language Impairment">Speach and Language Impairment</option>
                          <option id="visual" name="disabilityType" value="Visual Disability">Visual Disability</option>
                          <option id="cancer" name="disabilityType" value="Cancer (RA 11215)">Cancer (RA 11215)</option>
                          <option id="rared" name="disabilityType" value="Rare Disease (RA 10747)">Rare Disease (RA 10747)</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="pwd">Cause of Disability</label>
                        <select class="form-control" id="disabilityCause" name="disabilityCause">
                          <option selected>Select Cause</option>
                          <option id="autism" name="disabilityCause" value="Autism">Autism</option>
                          <option id="adhd" name="disabilityCause" value="ADHD">ADHD</option>
                          <option id="downsyn" name="disabilityCause" value="Down Syndrome">Down Syndrome</option>
                          <option id="chronic" name="disabilityCause" value="Chronic Illness">Chronic Illness</option>
                          <option id="cerebral" name="disabilityCause" value="Cerebral Palsy">Cerebral Palsy</option>
                          <option id="injury" name="disabilityCause" value="Injury">Injury</option>
                          <option id="others" name="disabilityCause" value="Others">Others</option>
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
                        <input type="text" class="form-control" id="houseNumber" name="houseNumber" placeholder="House No. & Street">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="pwd">Barangay</label>
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
                        <label for="pwd">Educational Attainment</label>
                        <select class="form-control" id="educationalAttainment" name="educationalAttainment">
                          <option selected>Select Attainment</option>
                          <option id="none" name="educationalAttainment" value="None">None</option>
                          <option id="kinder" name="educationalAttainment" value="Kindergarten">Kindergarten</option>
                          <option id="elem" name="educationalAttainment" value="Elementary">Elementary</option>
                          <option id="jhs" name="educationalAttainment" value="Junior High School">Junior High School</option>
                          <option id="shs" name="educationalAttainment" value="Senior High School">Senior High School</option>
                          <option id="college" name="educationalAttainment" value="College">College</option>
                          <option id="voc" name="educationalAttainment" value="Vocational / Technical">Vocational / Technical</option>
                          <option id="postgrad" name="educationalAttainment" value="Post Graduate">Post Graduate</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label for="pwd">Status of Employment</label>
                        <select class="form-control" id="employmentStatus" name="employmentStatus">
                          <option selected>Select Status</option>
                          <option id="employed" name="employmentStatus" value="Employed">Employed</option>
                          <option id="unemployed" name="employmentStatus" value="Unemployed">Unemployed</option>
                          <option id="selfemployed" name="employmentStatus" value="Self-Employed">Self-Employed</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="pwd">Category of Employment</label>
                        <select class="form-control" id="employmentCategory" name="employmentCategory">
                          <option selected>Select Category</option>
                          <option id="government" name="employmentCategory" value="Government">Government</option>
                          <option id="private" name="employmentCategory" value="Private">Private</option>
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
                          <option id="permanent" name="employmentType" value="Permanent / Regular">Permanent / Regular</option>
                          <option id="seasonal" name="employmentType" value="Seasonal">Seasonal</option>
                          <option id="casual" name="employmentType" value="Casual">Casual</option>
                          <option id="emergency" name="employmentType" value="Emergency">Emergency</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="pwd">Occupation</label>
                        <select class="form-control" id="occupation" name="occupation">
                          <option selected>Select Occupation</option>
                          <option id="managers" name="occupation" value="Managers">Managers</option>
                          <option id="professional" name="occupation" value="Professionals">Professionals</option>
                          <option id="technician" name="occupation" value="Technicians and Associate Professionals">Technicians and Associate Professionals</option>
                          <option id="clerical" name="occupation" value="Clerical Support Workers">Clerical Support Workers</option>
                          <option id="service" name="occupation" value="Service and Sales Workers">Service and Sales Workers</option>
                          <option id="agri" name="occupation" value="Skilled Agricultural, Forestry and Fishery Workers">Skilled Agricultural, Forestry and Fishery Workers</option>
                          <option id="craft" name="occupation" value="Craft and Related Trade Workers">Craft and Related Trade Workers</option>
                          <option id="plant" name="occupation" value="Plant and Machine Operators and Assemblers">Plant and Machine Operators and Assemblers</option>
                          <option id="elementary" name="occupation" value="Elementary Occupations">Elementary Occupations</option>
                          <option id="afo" name="occupation" value="Armed Forces Occupations">Armed Forces Occupations</option>
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
                        <input type="text" class="form-control" id="orgAffiliated" name="orgAffiliated" placeholder="">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="pwd">Contact Person</label>
                        <input type="text" class="form-control" id="orgContactPerson" name="orgContactPerson" placeholder="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label for="pwd">Office Address</label>
                        <input type="text" class="form-control" id="orgOfficeAddress" name="orgOfficeAddress" placeholder="">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="pwd">Contact Number</label>
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
                        <label for="pwd">SSS Number</label>
                        <input type="text" class="form-control" id="sssNumber" name="sssNumber" placeholder="" >
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label for="pwd">GSIS Number</label>
                        <input type="text" class="form-control" id="gsisNumber" name="gsisNumber" placeholder="" >
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="pwd">PAG-IBIG Number</label>
                        <input type="text" class="form-control" id="pagibigNumber" name="pagibigNumber" placeholder="" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label for="pwd">PhilSys No.</label>
                        <input type="text" class="form-control" id="philsysNumber" name="philsysNumber" placeholder="" >
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label for="pwd">PhilHealth No.</label>
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
                        <label for="pwd">Father's Name</label>
                        <input type="text" class="form-control" id="fathersName" name="fathersName" placeholder="Last Name, First Name, M.I." >
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label for="pwd">Mother's Name</label>
                        <input type="text" class="form-control" id="mothersName" name="mothersName" placeholder="Last Name, First Name, M.I." >
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="pwd">Guardian's Name</label>
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
                        <label for="pwd">Applicant</label>
                        <input type="text" class="form-control" id="applicantName" name="applicantName" placeholder="Last Name, First Name, M.I." >
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label for="pwd">Guardian</label>
                        <input type="text" class="form-control" id="guardiansName_2" name="guardiansName_2" placeholder="Last Name, First Name, M.I." >
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="pwd">Representative</label>
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