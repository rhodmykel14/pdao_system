<?php

include('connection/connection.php');

$reportType = $_POST['reportType'];

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    //unsure if $sql var should be accessible to all conditions,,,
    $sql = "";

    //report to view pwd essential info, sorted by age
    if ($reportType == '1') {
                                    $sql =  "SELECT id, pwdNumber, lastName, firstName, middleName, birthDate 
                                    FROM pwd ORDER BY birthDate ASC;"; echo $sql;
                            }

    //report, view pwd info by most recent applicant
    elseif ($reportType == '2') {
                                    $sql = "SELECT id, pwdNumber, lastName, firstName, middleName, birthDate 
                                    FROM pwd ORDER BY dateApplied ASC;"; echo $sql;
                                }

    //report, view pwd info in terms of educational and employment attainment
    //add something after the = ? variable realness
    elseif ($reportType == '3') {
                                    $educationalAttainment = $_POST['educationalAttainment'];
                                    $sql = "SELECT id, pwdNumber, lastName, firstName, middleName, birthDate 
                                    FROM pwd WHERE educationalAttainment = '{$educationalAttainment}'"; echo $sql;
                                }
    elseif ($reportType == '4') {
                                    $employmentStatus = $_POST['employmentStatus'];
                                    $sql =  "SELECT id, pwdNumber, lastName, firstName, middleName, birthDate 
                                    FROM pwd WHERE employmentStatus = '{$employmentStatus}'"; echo $sql;
                                }
    elseif ($reportType == '5') {
                                    $employmentCategory = $_POST['employmentCategory'];
                                    $sql =  "SELECT id, pwdNumber, lastName, firstName, middleName, birthDate 
                                    FROM pwd WHERE employmentCategory = '{$employmentCategory}'"; echo $sql;
                                }
    elseif ($reportType == '6') {
                                    $employmentType = $_POST['employmentType'];
                                    $sql =  "SELECT id, pwdNumber, lastName, firstName, middleName, birthDate 
                                    FROM pwd WHERE employmentType = '{$employmentType}'"; echo $sql;
                                }
    elseif ($reportType == '7') { 
                                    $occupation = $_POST['occupation'];
                                    $sql =  "SELECT id, pwdNumber, lastName, firstName, middleName, birthDate 
                                    FROM pwd WHERE occupation = '{$occupation}'"; echo $sql;
                                }

    //report, view pwd info re: org in charge of their registration; add brgy and dis. type
    elseif ($reportType == '8') {
                                    $orgAffiliated = $_POST['orgAffiliated'];
                                    $sql =  "SELECT id, pwdNumber, lastName, firstName, middleName, birthDate 
                                    FROM pwd WHERE orgAffiliated = '{$orgAffiliated}'"; echo $sql;
                                }
}
?>