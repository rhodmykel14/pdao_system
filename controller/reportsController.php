<?php
include('connection/connection.php');


$sql =  "SELECT id, pwdNumber, lastName, firstName, middleName, birthDate FROM pwd ORDER BY birthDate ASC;"

$sql = "SELECT * FROM pwd ORDER BY dateApplied ASC;"

$sql =    "SELECT * FROM pwd WHERE educationalAttainment = ;"
$sql =    "SELECT * FROM pwd WHERE employmentStatus = ;"
$sql =    "SELECT * FROM pwd WHERE employmentCategory = ;"
$sql =    "SELECT * FROM pwd WHERE employmentType = ;"
$sql =    "SELECT * FROM pwd WHERE occupation = ;"

$sql =    "SELECT * FROM pwd WHERE orgAffiliated = ;"
?>