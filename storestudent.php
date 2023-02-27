<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $faculty = $_POST['faculty'];

    include 'dbopen.php';

    $qry = "INSERT INTO students(name,phone,address,email,faculty) VALUES('$name','$phone','$address','$email','$faculty')";

    if(mysqli_query($con,$qry))
    {
        echo '<script>alert("Data inserted successfully"); window.location.href="students.php";</script>';
    }

    else
    {
        echo '<script>alert("Data cannot be inserted"); window.location.href="students.php";</script>';
    }

}
?>