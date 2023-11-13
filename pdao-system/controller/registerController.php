<?php

include('connection/connection.php');

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$username = $_POST['username'];
$inputPassword = $_POST['password'];
$repeatPassword = $_POST['password'];


$sql = "INSERT INTO user (firstName, lastName, email, username, password)
VALUES ('$firstName', '$lastName', '$email', '$username', '$inputPassword')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../index.html");
    exit;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

