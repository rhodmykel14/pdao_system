<?php

include('connection/connection.php');

$announcementName = $_POST['announcementName'];
$announcementDate = $_POST['announcementDate'];
$announcementDesc = $_POST['announcementDesc'];
$announcementPlace = $_POST['announcementPlace'];


$sql = "INSERT INTO announcement(
    announcementName,
    announcementDate,
    announcementDesc,
    announcementPlace
) VALUES (
    '$announcementName',
    '$announcementDate',
    '$announcementDesc',
    '$announcementPlace'
)";

if ($conn->query($sql) === TRUE) {
    header("Location: ../dashboard/announcement.php");
    exit;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>