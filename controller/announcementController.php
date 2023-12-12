<?php

session_start();

include('connection/connection.php');

if (isset($_POST['saveAnnouncement'])) {
    $announcementName = mysqli_real_escape_string($conn, $_POST['announcementName']);
    $announcementDate = mysqli_real_escape_string($conn, $_POST['announcementDate']);
    $announcementDesc = mysqli_real_escape_string($conn, $_POST['announcementDesc']);
    $announcementPlace = mysqli_real_escape_string($conn, $_POST['announcementPlace']);

    $query = "INSERT INTO announcement (
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

    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "Announcement Created Successfully!";
        header("Location: ../dashboard/announcement.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Announcement Not Created Successfully!";
        header("Location: ../dashboard/announcement.php");
        exit(0);
    }
}

// Use $query instead of $query_run in the condition below
if ($conn->query($query) === TRUE) {
    header("Location: ../dashboard/announcement.php");
    exit;
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
} 

?>



/*$announcementName = $_POST['announcementName'];
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
)"; */

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

ask ma'am cajes if i-implement ba ang email blast dianhi kay naa namay mail(); function ang php*/