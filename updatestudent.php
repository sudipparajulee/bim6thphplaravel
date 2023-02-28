<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $faculty = $_POST['faculty'];
    $id = $_POST['id'];

    include 'dbopen.php';

    $qry = "UPDATE students SET name='$name', phone='$phone', address = '$address', email='$email', faculty='$faculty' WHERE id=$id";

    if(mysqli_query($con,$qry))
    {
        echo '<script>alert("Data updated successfully"); window.location.href="students.php";</script>';
    }

    else
    {
        echo '<script>alert("Data cannot be updated"); window.location.href="students.php";</script>';
    }

}
?>