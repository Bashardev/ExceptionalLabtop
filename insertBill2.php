<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $model = $_POST["model"];
    $quantity = $_POST["Quantity"];
    $cobon=$_POST["Cob"];
    // Perform any additional processing if needed (e.g., checking cobon)

    // Calculate total based on quantity and other factors
    $total = calculateTotal($model, $quantity,$cobon);

    // Database connection details
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

    $sql = "INSERT INTO bills1 (model, Quantity,Total ) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

   
    mysqli_stmt_bind_param($stmt, "sis", $model, $quantity , $total);

    if (mysqli_stmt_execute($stmt)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

function calculateTotal($model, $quantity,$cobon) {
   
    $pricePerUnit = 0;
    if ($model=="Maqil99") {
        $pricePerUnit= 458.900;
    }
    else if ($model=="Masbar86"){
        $pricePerUnit= 550.850;

    }
    else if ($model=="Mudarrar67"){
        $pricePerUnit= 728;

    }
    if( $cobon=="student" ){
        $per=0.15;
        $total = $quantity * $pricePerUnit;
        $total=$total-($per*$total);
    }
    else{
    $total = $quantity * $pricePerUnit;
    }
    return $total;
}
?>