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
        header("Location: ../dashboard/staff_announcement.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Announcement Not Created Successfully!";
        header("Location: ../dashboard/staff_announcement.php");
        exit(0);
    }
}

// Use $query instead of $query_run in the condition below
if ($conn->query($query) === TRUE) {
    header("Location: ../dashboard/staff_announcement.php");
    exit;
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
} 

?>
