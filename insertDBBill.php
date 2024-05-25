<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $size = $_POST["size"];
    $Processor = $_POST["options-base"];
    $System = $_POST["options-base1"];
    $Graphics = $_POST["options-base2"];
    $Memory = $_POST["options-base3"];
    $Storage = $_POST["options-base4"];
    $Display = $_POST["options-base5"];
}

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "UserInfo";

// Create connection
$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Use prepared statement to prevent SQL injection
$sql = "INSERT INTO bills (Size, Processor, System, Graphics, Memory, Storage, Display)
 VALUES (?, ?,?, ?, ?, ?,? )";
$stmt = mysqli_prepare($conn, $sql);

// Bind parameters and execute the statement
mysqli_stmt_bind_param($stmt, "sssssss", $size, $Processor, $System, $Graphics, $Memory, $Storage, $Display);

if (mysqli_stmt_execute($stmt)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>