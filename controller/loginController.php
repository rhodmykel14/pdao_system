<?php

include('connection/connection.php');

session_start();

$userType = $_POST['userType'];
$username = $_POST['username'];
$inputPassword = $_POST['password'];

$sql = "SELECT * from user WHERE username='$username' AND password='$inputPassword'";

$result = $conn->query($sql);

$row=mysqli_fetch_array($result);

if ($row["userType"]=="user") {
    $_SESSION["username"]=$username;
    header("Location: ../dashboard/dashboard_user.php");
    exit;
} 

elseif($row["userType"]=="admin") {
    $_SESSION["username"]=$username;
    header("Location: ../dashboard/dashboard.php");
}

elseif($row["userType"]=="staff") {
    $_SESSION["username"]=$username;
    header("Location: ../dashboard/staff_pwdUser.php");
}

else {
    header("Location: ../index.php");
    echo "The";
}



?>