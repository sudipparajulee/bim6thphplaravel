<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "myprojectbim";

//surya ghimire

$con = mysqli_connect($server,$username,$password,$database);
if($con === false)
{
    die('Error on Connection');
}

$qry = "UPDATE students SET name='Shyam' WHERE id=1";

if(mysqli_query($con,$qry))
{
    echo 'Data Updated Successfully';
}
else
{
    echo 'Error on Data Update';
}
?>