<?php

session_start();

include('connection/connection.php');

if (isset($_POST['savePWDUser'])) {
    // Handle image upload
    $filename = $_FILES["avatar"]["name"];
    $tempname = $_FILES["avatar"]["tmp_name"];
    $folder = ".assets/img/pdao-avatar/" . $filename;

    // Get all the submitted data from the form
    $pwdNumber = mysqli_real_escape_string($conn, $_POST['pwdNumber']);
    $dateApplied = mysqli_real_escape_string($conn, $_POST['dateApplied']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $middleName = mysqli_real_escape_string($conn, $_POST['middleName']);
    $suffix = mysqli_real_escape_string($conn, $_POST['suffix']);
    $birthDate = mysqli_real_escape_string($conn, $_POST['birthDate']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $civilStatus = mysqli_real_escape_string($conn, $_POST['civilStatus']);
    $disabilityType = mysqli_real_escape_string($conn, $_POST['disabilityType']);
    $disabilityCause = mysqli_real_escape_string($conn, $_POST['disabilityCause']);
    $houseNumber = mysqli_real_escape_string($conn, $_POST['houseNumber']);
    $barangay = mysqli_real_escape_string($conn, $_POST['barangay']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $province = mysqli_real_escape_string($conn, $_POST['province']);
    $region = mysqli_real_escape_string($conn, $_POST['region']);
    $landlineNumber = mysqli_real_escape_string($conn, $_POST['landlineNumber']);
    $mobileNumber = mysqli_real_escape_string($conn, $_POST['mobileNumber']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $educationalAttainment = mysqli_real_escape_string($conn, $_POST['educationalAttainment']);
    $employmentStatus = mysqli_real_escape_string($conn, $_POST['employmentStatus']);
    $employmentCategory = mysqli_real_escape_string($conn, $_POST['employmentCategory']);
    $employmentType = mysqli_real_escape_string($conn, $_POST['employmentType']);
    $occupation = mysqli_real_escape_string($conn, $_POST['occupation']);
    $orgAffiliated = mysqli_real_escape_string($conn, $_POST['orgAffiliated']);
    $orgContactPerson = mysqli_real_escape_string($conn, $_POST['orgContactPerson']);
    $orgOfficeAddress = mysqli_real_escape_string($conn, $_POST['orgOfficeAddress']);
    $orgContactNumber = mysqli_real_escape_string($conn, $_POST['orgContactNumber']);
    $sssNumber = mysqli_real_escape_string($conn, $_POST['sssNumber']);
    $gsisNumber = mysqli_real_escape_string($conn, $_POST['gsisNumber']);
    $pagibigNumber = mysqli_real_escape_string($conn, $_POST['pagibigNumber']);
    $philsysNumber = mysqli_real_escape_string($conn, $_POST['philsysNumber']);
    $philhealthNumber = mysqli_real_escape_string($conn, $_POST['philhealthNumber']);
    $fathersName = mysqli_real_escape_string($conn, $_POST['fathersName']);
    $mothersName = mysqli_real_escape_string($conn, $_POST['mothersName']);
    $guardiansName = mysqli_real_escape_string($conn, $_POST['guardiansName']);
    $applicantName = mysqli_real_escape_string($conn, $_POST['applicantName']);
    $guardiansName_2 = mysqli_real_escape_string($conn, $_POST['guardiansName_2']);
    $representativeName = mysqli_real_escape_string($conn, $_POST['representativeName']);
    $pwdStatus = mysqli_real_escape_string($conn, $_POST['pwdStatus']);


    $query = "INSERT INTO pwd(
        accountType,
        pwdNumber,
        dateApplied,
        lastName,
        firstName,
        middleName,
        suffix,
        birthDate,
        gender,
        civilStatus,
        disabilityType,
        disabilityCause,
        houseNumber,
        barangay,
        city,
        province,
        region,
        landlineNumber,
        mobileNumber,
        email,
        educationalAttainment,
        employmentStatus,
        employmentCategory,
        employmentType,
        occupation,
        orgAffiliated,
        orgContactPerson,
        orgOfficeAddress,
        orgContactNumber,
        sssNumber,
        gsisNumber,
        pagibigNumber,
        philsysNumber,
        philhealthNumber,
        fathersName,
        mothersName,
        guardiansName,
        applicantName,
        guardiansName_2,
        representativeName,
        pwdStatus
    ) VALUES (
        '$accountType',
        '$pwdNumber',
        '$dateApplied',
        '$lastName',
        '$firstName',
        '$middleName',
        '$suffix',
        '$birthDate',
        '$gender',
        '$civilStatus',
        '$disabilityType',
        '$disabilityCause',
        '$houseNumber',
        '$barangay',
        '$city',
        '$province',
        '$region',
        '$landlineNumber',
        '$mobileNumber',
        '$email',
        '$educationalAttainment',
        '$employmentStatus',
        '$employmentCategory',
        '$employmentType',
        '$occupation',
        '$orgAffiliated',
        '$orgContactPerson',
        '$orgOfficeAddress',
        '$orgContactNumber',
        '$sssNumber',
        '$gsisNumber',
        '$pagibigNumber',
        '$philsysNumber',
        '$philhealthNumber',
        '$fathersName',
        '$mothersName',
        '$guardiansName',
        '$applicantName',
        '$guardiansName_2',
        '$representativeName',
        '$pwdStatus'
    )";

    $query_run = mysqli_query($conn,$query);

    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>Image uploaded successfully!</h3>";
    } else {
        echo "<h3>Failed to upload image!</h3>";
    }

    if($query_run)
    {
        $_SESSION['message'] = "PWD User Created Successfully!";
        header("Location: ../dashboard/dashboard_user.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "PWD User Not Created Successfully!";
        header("Location: ../dashboard/dashboard_user.php");
        exit(0);
    }
}

/*$accountType = $_POST['accountType'];
$pwdNumber = $_POST['pwdNumber'];
$dateApplied = $_POST['dateApplied'];
$lastName = $_POST['lastName'];
$firstName = $_POST['firstName'];
$middleName = $_POST['middleName'];
$suffix = $_POST['suffix'];
$birthDate = $_POST['birthDate'];
$gender = $_POST['gender'];
$civilStatus = $_POST['civilStatus'];
$disabilityType = $_POST['disabilityType'];
$disabilityCause = $_POST['disabilityCause'];
$houseNumber = $_POST['houseNumber'];
$barangay = $_POST['barangay'];
$city = $_POST['city'];
$province = $_POST['province'];
$region = $_POST['region'];
$landlineNumber = $_POST['landlineNumber'];
$mobileNumber = $_POST['mobileNumber'];
$email = $_POST['email'];
$educationalAttainment = $_POST['educationalAttainment'];
$employmentStatus = $_POST['employmentStatus'];
$employmentCategory = $_POST['employmentCategory'];
$employmentType = $_POST['employmentType'];
$occupation = $_POST['occupation'];
$orgAffiliated = $_POST['orgAffiliated'];
$orgContactPerson = $_POST['orgContactPerson'];
$orgOfficeAddress = $_POST['orgOfficeAddress'];
$orgContactNumber = $_POST['orgContactNumber'];
$sssNumber = $_POST['sssNumber'];
$gsisNumber= $_POST['gsisNumber'];
$pagibigNumber = $_POST['pagibigNumber'];
$philsysNumber = $_POST['philsysNumber'];
$philhealthNumber = $_POST['philhealthNumber'];
$fathersName = $_POST['fathersName'];
$mothersName = $_POST['mothersName'];
$guardiansName = $_POST['guardiansName'];
$applicantName = $_POST['applicantName'];
$guardiansName_2 = $_POST['guardiansName_2'];
$representativeName = $_POST['representativeName'];

$sql = "INSERT INTO pwd(
    accountType,
    pwdNumber,
    dateApplied,
    lastName,
    firstName,
    middleName,
    suffix,
    birthDate,
    gender,
    civilStatus,
    disabilityType,
    disabilityCause,
    houseNumber,
    barangay,
    city,
    province,
    region,
    landlineNumber,
    mobileNumber,
    email,
    educationalAttainment,
    employmentStatus,
    employmentCategory,
    employmentType,
    occupation,
    orgAffiliated,
    orgContactPerson,
    orgOfficeAddress,
    orgContactNumber,
    sssNumber,
    gsisNumber,
    pagibigNumber,
    philsysNumber,
    philhealthNumber,
    fathersName,
    mothersName,
    guardiansName,
    applicantName,
    guardiansName_2,
    representativeName
) VALUES (
    '$accountType',
    '$pwdNumber',
    '$dateApplied',
    '$lastName',
    '$firstName',
    '$middleName',
    '$suffix',
    '$birthDate',
    '$gender',
    '$civilStatus',
    '$disabilityType',
    '$disabilityCause',
    '$houseNumber',
    '$barangay',
    '$city',
    '$province',
    '$region',
    '$landlineNumber',
    '$mobileNumber',
    '$email',
    '$educationalAttainment',
    '$employmentStatus',
    '$employmentCategory',
    '$employmentType',
    '$occupation',
    '$orgAffiliated',
    '$orgContactPerson',
    '$orgOfficeAddress',
    '$orgContactNumber',
    '$sssNumber',
    '$gsisNumber',
    '$pagibigNumber',
    '$philsysNumber',
    '$philhealthNumber',
    '$fathersName',
    '$mothersName',
    '$guardiansName',
    '$applicantName',
    '$guardiansName_2',
    '$representativeName'
)";*/


if ($conn->query($query) === TRUE) {
    header("Location: ../dashboard/dashboard.php");
    exit;
} else {
  echo "Error: " . $query . "<br>" . $conn->error;
}

//stuff for registration confirmation
$query = mysqli_query($conn, $insertQuery);if ($result) {
    // get recently inserted row
    $selectQuery = "SELECT * FROM pwd ORDER BY id DESC LIMIT 1";
    $selectResult = mysqli_query($conn, $selectQuery);

    // Cquery check
    if ($selectResult) {
        // data fetch
        $row = mysqli_fetch_assoc($selectResult);

        // data output
        // dpat na-ay katong sms blast API dianhi
        // ask ma'am cajes about SMS blast APIs w/ student plans? 

        // clear results
        mysqli_free_result($selectResult);
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Error: " . mysqli_error($conn);
}


?>