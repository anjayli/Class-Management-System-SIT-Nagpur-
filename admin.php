<?php
$host = "localhost";
$user = "root";
$password = "";
$db_name = "class";
$con = mysqli_connect($host , $user , $password , $db_name);
if(mysqli_connect_errno()){
die("Failed to connect with MySQL :".mysqli_connect_errno());
}

if(isset($_POST['but_submit'])){

    $username = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    if ($username != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from admin where username='".$username."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['username'] = $username;
            header('Location: adminpage.php');
        }else{
            echo "Invalid username and password";
        }

    }

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
    <form align="center" action="admin.php" method="POST" >
    Username: <input type="text" id="username" name="username"><br><br>
    Password: <input type="password" id="password" name="password"><br><br>
    <input type="Submit" value="Submit" name="but_submit" >
    </form>
    
</body>
</html>
