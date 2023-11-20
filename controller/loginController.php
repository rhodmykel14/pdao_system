<?php

include('connection/connection.php');

$role = $_POST['role'];
$username = $_POST['username'];
$inputPassword = $_POST['password'];

$sql = "SELECT * from user WHERE username='$username' AND password='$inputPassword'";

$result = $conn->query($sql);

if ($result) {
    header("Location: ../dashboard/dashboard.php");
    exit;
} else {
    header("Location: ../index.php");
}



?>