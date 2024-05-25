<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>    
    <link rel="icon" type="img" href="logo.png">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        header {
            background-color: #000000;
            padding: 10px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #logo {
            max-width: 50px;
            margin-right: 10px;
        }

        #website-name {
            font-size: 1.5em;
            font-weight: bold;
            margin-right: auto;
        }

        nav {
            display: flex;
            margin-left: auto;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #000000;
            box-shadow: 0 8px 16px rgb(0, 0, 0);
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        #search-container {
            display: flex;
            align-items: center;
        }

        #search-bar {
            display: none;
            margin-left: 10px;
        }

        #search-button {
            cursor: pointer;
        }

        .container {
            padding: 20px;
        }

        .card {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-content {
            padding: 20px;
        }

        .details {
            text-align: left;
            margin-bottom: 20px;
        }

        .details p {
            margin: 8px 0;
            font-size: 14px;
            color: #555;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .update-button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s;
            margin: 5px;
        }

        .update-button:hover {
            background-color: #2980b9;
            
        }
    </style>
</head>
<body>
    <header>
        <a href="index.html"><img id="logo" src="logo.png" alt="Logo"></a>
        <div id="website-name">ExceptionalLaptop</div>
        <nav>
            <a href="index.html">Home</a>
            <a href="index1.html">Log In</a>
            <a href="index2.html">Sign Up</a>
            <div class="dropdown">
                <a >Our Services</a>
                <div class="dropdown-content">
                    <a href="index4.html">Exceptional Laptop</a>
                    <a href="index5.html">Laptops Models</a>
                </div>
            </div>
            <div class="dropdown">
                <a>Bills</a>
                <div class="dropdown-content">
                    <a href="index8.html">Exceptional Laptop bill</a>
                    <a href="index8_.html">Laptops Models bill</a>
                </div>
            </div>
            <a href="index9.html">Have Fun</a>
            <a href="index6.html">About Us</a>
            <a href="index7.html">Contact Us</a>
            <a href="index10.html">Questionnaire</a>
        </nav>
        <div id="search-container">
            <img src="search.png" alt="search" height="30"width="30">
        </div>
    </header>
    
    <br>
    <div class="container">
        <div class="row">
            <form action="" method="POST">
                <h3 for="color">Select a color:</h3>
                <select name="color" id="color" class="form-select">
                    <option value="All">All Colors</option>
                    <option value="Dark">Dark</option>  
                    <option value="White">White</option>
                    <option value="Light Grey">Light Grey</option>
                    <option value="Light blue">Light blue</option>
                </select>
                <button type="submit" class="update-button">Search</button>
            </form>
            <br>
        </div>
        <div class="row">
            <?php
            //set the details of the sever
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="el";
            
            $conn =mysqli_connect($servername, $username, $password, $dbname);

            if (!$conn) {
                die("Connection Failed". mysqli_connect_error());
            }
            $sql = "";
            //create SQL statment
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["color"])) {
                $selectedColor = $_POST["color"];
                if ($selectedColor !== "All") {
                    // If a specific color is selected, modify the SQL query
                    $sql = "SELECT * FROM laptops WHERE color = '$selectedColor'";
                } else {
                    // If "All Colors" is selected, retrieve all laptops
                    $sql = "SELECT * FROM laptops";
                }
            } else {
                // Fetch all laptops by default
                $sql = "SELECT * FROM laptops";
            }
            //creating card for each row 
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row["ID"];
                    echo '<div class="col-md-4">';
                    echo '<form action=""method="POST" class="card">';
                    echo '<br>';
                    echo ' <img src="1-3.png" alt="Laptop Image">';
                    echo '<div class="card-content">';
                    echo '<div class="details">';
                    echo '<p><strong>Number:</strong>'.$row['ID'].'</p>';
                    echo '<p><strong>CPU:</strong>'.$row['cpu'].'</p>';
                    echo '<p><strong>OS:</strong>'.$row['os'].'</p>';
                    echo '<p><strong>GPU:</strong>'.$row['gpu'].'</p>';
                    echo '<p><strong>RAM:</strong>'.$row['ram'].'</p>';
                    echo '<p><strong>STORGE:</strong>'.$row['disk'].'</p>';
                    echo '<p><strong>Screen Size:</strong>'.$row['screensize'].'</p>';
                    echo '<p><strong>Screen Details:</strong>'.$row['screendtails'].'</p>';
                    echo '<p><strong>color:</strong>'.$row['color'].'</p>';
                    echo '<p><strong>TotalPrice:</strong>'.$row['price'].'</p>';
                    echo '</div>';
                    echo '<input type="text" name="new_screen_size" placeholder="New Screen Size">';
                    echo '<div class="button-container">
                    <button class="update-button" type="submit" name="update">Update</button>
                    <input type="hidden" name="update_id" value="' . $id . '">
                    <input type="hidden" name="delete_id" value="' . $id . '">
                    <button class="update-button" type="submit" name="delete" value="Delete" style="background-color:red;">Delete</button>
                    </div>
                    </div>
                    </form>
                    </div>
                    ';
                }
            }else{
                echo '<h1>No laptop inserted</h1>';
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    if (isset($_POST["update"])) {
                        $newScreenSize = $_POST["new_screen_size"];
                        $id = $_POST["update_id"];
                        // Update your SQL query to include the new screen size
                        $sqlUpdate = "UPDATE laptops SET screensize = '$newScreenSize' WHERE id = '$id'";
                
                        if ($conn->query($sqlUpdate) === TRUE) {
                            echo "<h>Configuration updated successfully!</h1>";
                        } else {
                            echo "Error updating record: " . $conn->error;
                        }
                    }
                // Check if the delete_id key is set in the form data
                if(isset($_POST["delete"])){
                    if (isset($_POST["delete_id"])) {
                        $deleteId = $_POST["delete_id"];
                
                        $sqlDelete = "DELETE FROM laptops WHERE id = '$deleteId'";
                
                        if ($conn->query($sqlDelete) === TRUE) {
                            echo "<h>Configuration deleted successfully!</h1>";
                        } else {
                            echo "Error deleting record: " . $conn->error;
                        }
                    } else {
                        echo "Error: delete_id key is not set in form data.";
                    }

                }
            }
            
            
            mysqli_close($conn);
            ?>
        </div>
    </div>
</body>
</html>