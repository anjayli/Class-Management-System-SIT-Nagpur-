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
$sql = "DELETE FROM `student` (`username`, `password`) VALUES ('$username', '$password')";;

// insert in database 
$rs = mysqli_query($con, $sql);

if($con->query($rs)==TRUE)
{
	echo "record deleted successfully";
}
else{
    echo "error deleting record:" .$con->error;
}
$con->close();

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
    ID: <input type="id" id="id" name="id"><br><br>
    Username: <input type="text" id="username" name="username"><br><br>
    Password: <input type="password" id="password" name="password"><br><br>
    <input type="button" value="DELETE" name="but_DELETE_STUDENT" >
    </form>
</body>
</html>