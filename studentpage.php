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
<html>
<head>   <title> LOGIN AS STUDENT </title> </head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body{
        background-color: rgb(237, 230, 240); 
    }
    input[type=text]{
        width: 40%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 2px solid black;
        background-color: rgb(237, 230, 240); 
    }
    input[type=text]:focus{
        background-color: none;
    }
    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }
    .topnav {
        overflow: hidden;
        background-color: #333;
    }
    .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }
    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }
    .topnav a.active {
        background-color: #02567a;
        color: white;
    }
    form{
        border-style: double;
    }

</style>

<body>
    <br>
    <img src = "logo.png" width="1764" height="180" border="2"> <br></br>
    <div class="topnav">
        <a class="active" href="#login_page">Home</a>
        <a href="#view_attendence"> Attendence </a>
        <a href="#view_marks"> Score </a>
        <a href="#veiw_progress"> Progress </a>
        <a href="logout.php"> LogOut </a>
      </div>
      <div style="padding-left:16px">
      </div>

    <marquee direction="right" scrollamount="8" bgcolor="white"><font color="red">Symbiosis Insitute of Technology [SIT], NAGPUR     Symbiosis Insitute of Technology [SIT], NAGPUR     Symbiosis Insitute of Technology [SIT], NAGPUR</font> </marquee> 
    <br></br>

    <form>
        <h1 align="center"> You have Login as Student </h1>

    </form>
    <br></br>
</body>
</html>



