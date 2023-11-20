<?php

include('connection/connection.php');

$accountType = $_POST['accountType'];
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
)";

if ($conn->query($sql) === TRUE) {
    header("Location: ../dashboard/dashboard.php");
    exit;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


?>