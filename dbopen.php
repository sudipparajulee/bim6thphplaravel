<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "myprojectbim";

$con = mysqli_connect($server,$username,$password,$database);
if($con === false)
{
    die('Error on Connection');
}

?>