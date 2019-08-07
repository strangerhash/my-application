<?php 
$servername="localhost";
$username="username";
$password="your password";
$database="database name";
//$message="";
$conn=new mysqli('localhost','username','password','databasename');

if($conn->connect_error)
{
  die("connection failed" . $conn->connect_error);
  }
?>
