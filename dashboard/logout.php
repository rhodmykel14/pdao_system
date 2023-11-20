<?php

include('../connection/connection.php');

session_start();
unset($_SESSION['username']);
header("location:../index.html");

?>