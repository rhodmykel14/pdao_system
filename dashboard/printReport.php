<?php

session_start();

$_SESSION['username'] = ['pwdstaff'];
$_SESSION['userType'] = ['staff'];

require_once('../controller/connection/connection.php');

if (isset($_GET['id'])){
  $id=$_GET['id'];
  $update=mysqli_query($conn,"UPDATE SET 'pwd' WHERE 'id'='$id'");
}

$query = "SELECT * FROM pwd";
$result = mysqli_query($conn,$query);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Print PWD Report</title>
    <style>
        h1 {
            color: blue;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }

        h2 {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }
        
        p {
            color: black;
            font-family: "Lucida Console", "Courier New", monospace;
            font-size: '12';
        }

        table {
            color: black;
            font-family: Arial, Helvetica, sans-serif;
            width: 100%;

        }
        th, td {
            padding-top: 10px;
            padding-bottom: 0px;
            padding-left: 30px;
            padding-right: 40px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #04AA6D;
            color: white;
            text-align: center;
        }
        body {
            margin-top: 50px;
            margin-bottom: 100px;
            margin-right: 80px;
            margin-left: 80px;
            
        }
        .img1{
            float: left;
        }

        .img2{
            float: right;
        }
    </style>
</head>
<body>
    <h1><img src="../assets/img/Iligan_City_Seal.svg" class="img1" style="width:170px;height:170px;margin-right:15px;">
    City Government of Iligan
    <img src="../assets/img/pdao_logo.jpg" class="img2" style="width:170px;height:170px;margin-right:15px;"></h1>
    <h2>Person with Disability Affairs Office</h2>

    <hr>

    <h2>List of PWD Masterlist</h2>
    <p style="text-align: center;" id="date"> As of </p>
    
    <table>
    <thead>
        <tr>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Civil Status</th>
            <th>Contact Number</th>
            <th>Gender</th>
            <th>PWD Type</th>
            <th>User Status</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $query_run = mysqli_query($conn, $query);

            if(mysqli_num_rows($query_run) > 0)
            {
            foreach($query_run as $pwd)
            {
                //echo $pwd[]
                ?>
                <tr>
                    <td><?= $pwd['firstName']; ?></td>
                    <td><?= $pwd['middleName']; ?></td>
                    <td><?= $pwd['lastName']; ?></td>
                    <td><?= $pwd['civilStatus']; ?></td>
                    <td><?= $pwd['mobileNumber']; ?></td>
                    <td><?= $pwd['gender']; ?></td>
                    <td><?= $pwd['disabilityType']; ?></td>
                    <td><?= $pwd['pwdStatus']; ?></td>
                </tr>
                <?php
            }
            }
            else
            {
            echo "<h5> No Record Found. </h5>";
            }
            ?>
        </tbody> 
    </table>
    <script>
        const d = new Date();
        document.getElementById("date").innerHTML = d;
    </script>
</body>
</html>