<?php

include('connection/connection.php');

$$id = $_POST['id'];


$sql = "DELETE FROM user WHERE id = '$id';";

$result = $conn->query($sql);

if ($result) {
    header("Location: ../dashboard/dashboard.html");
    exit;
} else {
    header("Location: ../index.html");
}



?>