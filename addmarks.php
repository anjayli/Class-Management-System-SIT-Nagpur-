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
$PP = $_POST['PP'];
$FDS = $_POST['FDS'];
$DMPT = $_POST['DMPT'];
$DELD = $_POST['DELD'];
$CO = $_POST['CO'];
$Total = $_POST['Total'];
$Percentage = $_POST['Percentage'];

// database insert SQL code
$sql = "INSERT INTO `marks` (`username`, `PP`, `FDS`, `DMPT`, `DELD`,`CO`,`Total`,`Percentage`) VALUES ('$username', '$PP', '$FDS', '$DMPT','$DELD','$CO','$Total','$Percentage')";

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
    PP: <input type="text" id="PP" name="PP"><br><br>
    FDS: <input type ="text" id="FDS" name="FDS"><br><br>
    DMPT: <input type = "text" id="DMPT" name="DMPT"><br><br>
    DELD: <input type = "text" id="DELD" name="DELD"><br><br>
    CO: <input type = "text" id="CO" name="CO"><br><br>
    TOTAL: <input type = "text" id="Total" name="Total"><br><br>
    PERCENTAGE: <input type = "text" id="Percentage" name="Percentage"><br><br>
    <input type="Submit" value="Submit" name="but_submit" >
    </form>
</body>
</html>