<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="homepage">
    <div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
       Hello  <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       :)
      </p>
      <a  style=font-size:50px; font-weight:bold; href="logout.php">LOGOUT</a>
    </div>
    <div class="home" >
        <h1 style=font-size:30px;>welcome to the my-portfolio</h1>
        <br>
        <a  style=font-size:30px; href="https://pavansaitota.github.io/my-portfolio/">CLICK HERE TO CONTINUE TO NEXT WEBPAGE</a>
       <br> <br>
       <P>CLICK "LOGOUT" TO EXIT</P>
    </div>
</body>
</html>