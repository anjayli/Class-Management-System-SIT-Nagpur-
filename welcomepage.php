<?php
$host = "localhost";
$user = "root";
$password = "";
$db_name = "class";
$con = mysqli_connect($host , $user , $password , $db_name);
if(mysqli_connect_errno()){
die("Failed to connect with MySQL :".mysqli_connect_errno());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<style>
    body {
        background-color: rgb(237, 230, 240); 
    }
    h1 {
        color: rgb(0, 2, 117);
        text-align: center;
    }
</style>
<body>
 
    <image src ="logo.png" width="1250" height="250"></image> 

    <h1>Welcome to Class Management System</h1><br><br>
    <div align="center">
        <h3>Login as -<h3>
    <a href="admin.php"><img src="users.png" ></a>        <figcaption>Admin</figcaption><br><br>
    <a href ="student.php"><img src="students.png"></a>         <figcaption>Student</figcaption><br><br>
    <a href="teacher.php"><image src="teachers.png"></a>        <figcaption>Teacher</figcaption>
    </div>    
</body>
</html>