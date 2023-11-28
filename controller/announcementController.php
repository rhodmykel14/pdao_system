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

/*
$sql = SELECT mobileNumber FROM pwd;
$result = $mysqli->query($sql);
$data = array();
while ($row = $result->fetch_assoc()) {$data[] = $row;}
$mysqli = close();

$sql = SELECT announcementDesc FROM announcements;
$announcement = $mysqli->query($sql);
$mysqli = close();

pseudocode incoming
foreach ($data as $data){
    try {$announcement = $client->messages->create(
            $data,
            [
                'from' => $data,
                'body' => $announcement,
            ]
        );
        
        echo 'Message sent to: ' . $data . '<br>';
    } catch (Exception $e) {
        echo 'Error sending message to ' . $data . ': ' . $e->getMessage() . '<br>';
    }
}

ask ma'am cajes if i-implement ba ang email blast dianhi kay naa namay mail(); function ang php
*/

if ($conn->query($sql) === TRUE) {
    header("Location: ../dashboard/announcement.php");
    exit;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>