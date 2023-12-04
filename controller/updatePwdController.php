<?php

session_start();

include '../connection/connection.php';
/*$pwdID = $_GET['id'];
$update = "SELECT * FROM pwd WHERE id = $pwdID";
$updatequery = mysqli_query($conn, $update);
$result = mysqli_fetch_assoc($updatequery);*/

$pwdID = $_GET['id'];
$updateQuery = "SELECT * FROM pwd WHERE id = '$pwdID' ";
$updateResult = mysqli_query($conn, $updateQuery);
$result = mysqli_fetch_assoc($updateResult);


if(isset($_POST['updatePWDuser'])){
    $pwdID = $_GET['id'];
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

    $insertquery =  "UPDATE SET pwd
	  accountType='$accountType',
	  pwdNumber='$pwdNumber',
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

	  WHERE id='$pwdID'
  ";
        $mysqliquery = mysqli_query($conn, $insertquery);
    if($insertquery){
        ?>
    <script>
        window.location.replace("staff_editPWD.php");
    </script>

<?php 

    }else{
        echo 'Not Updated';
    }



}




?>

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


/*if ($conn->query($sql) === TRUE) {
    header("Location: ../dashboard/dashboard.php");
    exit;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

//stuff for registration confirmation
$sql = mysqli_query($conn, $insertQuery);if ($result) {
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