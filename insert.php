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

$qry = "INSERT INTO students(name,phone,address,email,faculty) VALUES ('Ram','9855555555','Chitwan','ram@lict.edu.np','BIM')";

if(mysqli_query($con,$qry))
{
    echo 'Data Inserted Successfully';
}
else
{
    echo 'Error on Data insert';
}
?>