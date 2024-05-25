<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $inputUsername = $_POST["uname"];
    $time=$_POST['loginTime'];
}

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "UserInfo";
 

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO  lastlogin (User, lastLogin ) VALUES (?, ?)";
$stmt = mysqli_prepare($conn, $sql);


mysqli_stmt_bind_param($stmt, "ss", $inputUsername ,$time);

if (mysqli_stmt_execute($stmt)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>