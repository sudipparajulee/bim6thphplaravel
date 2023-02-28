<?php
include 'dbopen.php';
$qry = "SELECT * FROM students";

$result = mysqli_query($con,$qry);



include 'dbclose.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Students</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h2 class="my-3 font-bold text-3xl text-center">Our Students</h2>

    <div class="text-right mx-36">
        <a href="addstudent.php" class="bg-blue-500 text-white py-1 px-2 rounded">Add Student</a>
    </div>

    <div class="grid grid-cols-4 gap-8 px-36">
        <?php 
        while($row = mysqli_fetch_assoc($result))
        {
            ?>
            <div class="bg-gray-200 p-5 rounded-lg shadow">
            <p>ID: <?php echo $row['id']; ?></p>
            <p>Name: <?php echo $row['name']; ?></p>
            <p>Phone: <?php echo $row['phone']; ?></p>
            <p>Address: <?php echo $row['address']; ?></p>
            <p>Email: <?php echo $row['email']; ?></p>
            <p>Faculty: <?php echo $row['faculty']; ?></p>
            <a href="editstudent.php?stdid=<?php echo $row['id']; ?>" class="bg-blue-500 text-white px-3 py-1 rounded">Edit</a>
            <a href="deletestudent.php" class="bg-red-500 text-white px-3 py-1 rounded">Delete</a>
        </div>
    <?php    
    }
        ?>
        

        
    </div>
</body>
</html>