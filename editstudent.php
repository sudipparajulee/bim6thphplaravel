<?php
$id = $_GET['stdid'];
include 'dbopen.php';
$qry = "SELECT * FROM students WHERE id=$id";

if(!$result = mysqli_query($con,$qry))
{
    die('Data Fetch Error');
}
$row = mysqli_fetch_assoc($result);
include 'dbclose.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <form class="bg-gray-300 mt-12 p-5 w-6/12 mx-auto rounded shadow text-center" action="storestudent.php" method="POST">
        <h2 class="font-bold text-2xl my-2">Edit Student</h2>

        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" placeholder="Enter Full Name" value="<?php echo $row['name'];?>" name="name" class="block p-5 my-5 w-full rounded outline-none"> 

        <input type="text" placeholder="Phone" value="<?php echo $row['phone'];?>" name="phone" class="block p-5 my-5 w-full rounded outline-none">

        <input type="email" placeholder="Email" value="<?php echo $row['email'];?>" name="email" class="block p-5 my-5 w-full rounded outline-none">

        <input type="text" placeholder="Address" value="<?php echo $row['address'];?>" name="address" class="block p-5 my-5 w-full rounded outline-none">

        <input type="text" placeholder="Faculty" value="<?php echo $row['faculty'];?>" name="faculty" class="block p-5 my-5 w-full rounded outline-none">

        <input type="submit" name="submit" value="Update" class="p-5 my-5 bg-blue-600 text-white rounded outline-none">
        <a href="students.php" class="p-5 my-5 bg-red-600 text-white rounded outline-none">Cancel</a>
    </form>
</body>
</html>