<?php
$servername= "localhost"; $username = "root";  $password = "";
$dbname= "UserInfo";
//1- Create DB connection
$conn = mysqli_connect($servername, $username, $password, $dbname); 
// 2-Check connection
if (!$conn) {  die("Connection failed: " . mysqli_connect_error()); }
else {  print "You are connected to $dbname <br />"; }
//3- specify SQL statement
$sql= "";
$result = mysqli_query($conn, $sql); //4-execute query
mysqli_close($conn); //5- close DB connection
?>
