<?php
$host = "localhost";
$user = "root";
$password = "";
$db_name = "class";
$con = mysqli_connect($host , $user , $password , $db_name);
if(mysqli_connect_errno()){
die("Failed to connect with MySQL :".mysqli_connect_errno());
}

//$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records
$username = $_POST['username'];
$password = $_POST['password'];
$phone_no = $_POST['phone_no'];
$address = $_POST['address'];

// database insert SQL code
$sql = "INSERT INTO `student` (`username`, `password`, `phone_no`, `address`) VALUES ('$username', '$password', '$phone_no', '$address')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	//echo "Contact Records Inserted";
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
<image src ="logo.png" width="1300"></image> 
    <form align="center" method="POST" >
    Username: <input type="text" id="username" name="username"><br><br>
    Password: <input type="password" id="password" name="password"><br><br>
    Phone NO: <input type ="phoneno" id="phone_no" name="phone_no"><br><br>
    Address: <input type = "text" if="address" name="address"><br><br>
    <input type="Submit" value="Submit" name="but_submit" >
    </form>
</body>
</html>