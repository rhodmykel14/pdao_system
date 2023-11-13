<?php

include('connection/connection.php');

$id = $_POST['id'];
$newPassword = $_POST['new_password'];

$sql = "UPDATE user
SET password = '$newPassword' WHERE id = $id;";

$result = $conn->query($sql);

if ($result) {
    header("Location: ../dashboard/dashboard.html");
    exit;
} else {
    header("Location: ../index.html");
}



?>