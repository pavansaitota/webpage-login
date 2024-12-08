<?php

$host="PAVANSAIAP\SQLEXPRESS";
$user="PAVANSAIAP\pavan";
$pass="";
$db="LOGIN";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>
