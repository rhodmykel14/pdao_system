<?php

session_start();

$_SESSION['username'] = ['pwdstaff'];
$_SESSION['userType'] = ['staff'];

include('connection/connection.php');

$id = isset($_GET['id']) ? mysqli_real_escape_string($conn, $_GET['id']) : null;

if (!$id) {
    // Handle the case where 'id' is not set
    echo 'Invalid request: Missing ID parameter';
    exit;
}

$updateQuery = "SELECT * FROM pwd WHERE id = '$id' ";
$updateResult = mysqli_query($conn, $updateQuery);
$result = mysqli_fetch_assoc($updateResult);

if (isset($_POST['updatePWDUser'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
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

    $updateQuery = "UPDATE pwd
        SET pwdNumber='$pwdNumber',
        dateApplied='$dateApplied',
        lastName='$lastName',
        firstName='$firstName',
        middleName='$middleName',
        suffix='$suffix',
        birthDate='$birthDate',
        gender='$gender',
        civilStatus='$civilStatus',
        disabilityType='$disabilityType',
        disabilityCause='$disabilityCause',
        houseNumber='$houseNumber',
        barangay='$barangay',
        city='$city',
        province='$province',
        region='$region',
        landlineNumber='$landlineNumber',
        mobileNumber='$mobileNumber',
        email='$email',
        educationalAttainment='$educationalAttainment',
        employmentStatus='$employmentStatus',
        employmentCategory='$employmentCategory',
        employmentType='$employmentType',
        occupation='$occupation',
        orgAffiliated='$orgAffiliated',
        orgContactPerson='$orgContactPerson',
        orgOfficeAddress='$orgOfficeAddress',
        orgContactNumber='$orgContactNumber',
        sssNumber='$sssNumber',
        gsisNumber='$gsisNumber',
        pagibigNumber='$pagibigNumber',
        philsysNumber='$philsysNumber',
        philhealthNumber='$philhealthNumber',
        fathersName='$fathersName',
        mothersName='$mothersName',
        guardiansName='$guardiansName',
        applicantName='$applicantName',
        guardiansName_2='$guardiansName_2',
        representativeName='$representativeName',
        pwdStatus='$pwdStatus'
        WHERE id='$id'";

    $updateResult = mysqli_query($conn, $updateQuery);

    if ($updateResult) {
        $_SESSION['message'] = "PWD Updated Successfully";
        header("Location: ../dashboard/staff_editPWD.php");
        exit(0);
    } else {
        echo 'Not Updated';
    }
}

?>
