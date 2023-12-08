<?php

include('connection/connection.php');


if(isset($_POST['savePWDStaff']))
{
  $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
  $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $inputPassword = mysqli_real_escape_string($conn, $_POST['password']);
  $repeatPassword = mysqli_real_escape_string($conn, $_POST['password']);
  $userType = mysqli_real_escape_string($conn, $_POST['userType']);

  $query = "INSERT INTO user (firstName, lastName, email, username, password, userType)
  VALUES ('$firstName', '$lastName', '$email', '$username', '$inputPassword', '$userType')";

  $query_run = mysqli_query($conn,$query);
    if($query_run)
    {
        $_SESSION['message'] = "PWD User Created Successfully!";
        header("Location: ../dashboard/user.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "PWD User Not Created Successfully!";
        header("Location: ../dashboard/user.php");
        exit(0);
    }
}

/*$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$username = $_POST['username'];
$inputPassword = $_POST['password'];
$repeatPassword = $_POST['password'];


$sql = "INSERT INTO user (firstName, lastName, email, username, password)
VALUES ('$firstName', '$lastName', '$email', '$username', '$inputPassword')"; */

if ($conn->query($sql) === TRUE) {
    header("Location: ../dashboard/dashboard.php");
    exit;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

