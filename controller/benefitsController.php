<?php

include('connection/connection.php');

$benefitName = $_POST['benefitName'];
$benefitDescription = $_POST['benefitDescription'];
$benefitDate = $_POST['benefitDate'];


$sql = "INSERT INTO benefits(
    benefitName,
    benefitDescription,
    benefitDate
) VALUES (
    '$benefitName',
    '$benefitDescription',
    '$benefitDate'
)";

if ($conn->query($sql) === TRUE) {
    header("Location: ../dashboard/benefits.php");
    exit;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


?>