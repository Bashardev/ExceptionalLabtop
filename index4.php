<!DOCTYPE html>
<html>
    <head>
        <title>ExceptionalLaptop</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
        <link rel="icon" type="img" href="logo.png">
        
        <style>
            
        header {
            background-color: #000000;
            padding: 10px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #logo {
            max-width: 50px; /* Adjust the width as needed */
            margin-right: 10px;
        }

        #website-name {
            font-size: 1.5em;
            font-weight: bold;
            margin-right: auto; /* Move "Your Website" to the left */
        }

        nav {
            display: flex;
            margin-left: auto; /* Align navigation links to the right */
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
        table,td,th{
            text-align: center;
            padding: 10px;
        }
            .centered {
            
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            }
            .dark{
            background-color: black;
        }
        .centered1 {
            
            position: absolute;
            top: 20%;
            left: 60%;
            transform: translate(-50%, -50%);
            }
            .dark{
            background-color: black;
        }
        .container {
        position: relative;
        max-width: 800px; /* Maximum width */
        margin: 0 auto; /* Center it */
        }
        #center{
        text-align: center;
        color: lightblue;
        }
        .img {
        display: block;
        margin-left: auto;
        margin-right: auto;
      }
      .coler{
        border-width: 1px;
        border-color: lightgray;
      }
      .custom-radio {
            display: none;
        }

        .custom-radio + label {
            cursor: pointer;
            padding: .75rem 1.25rem;
            font-size: 1rem;
            color: black;
            border: 1px solid lightgray;
            border-radius: 0.25rem;
            margin: 2px;

        }

        .custom-radio:checked + label {
            border-color: lightblue;
            border-width: 4px; 
           

        }
        #gallery-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #gallery {
            display: flex;
        }

        .thumbnail {
            width: 100px;
            height: 100px;
            margin: 5px;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }

        .thumbnail:hover {
            transform: scale(1.2);
        }

        #enlarged-view {
            width: 300px;
            height: 300px;
            margin: 10px;
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
                    <a>Our Services</a>
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

        <div class="container-fluid">
            <img src="Ex.jpg" alt="ExceptionalLaptopBackground" class="img" width="100%">
        </div>

   
    <div class="row" style="background-color: #000000;">
        <hr>
        <div class="col-6">
            <div style="background-image:url(cpu\ back.jpg); background-repeat: no-repeat; background-attachment: fixed;background-size: cover;">
                <br>
                <br>
                <h2 style="text-align: center;color: whitesmoke;">Processor</h2>
                <br>
                <br>
                <br>
                <h2 style="text-align: center;color: whitesmoke;">Graphics</h2>
                <br>
                <br>
                <br>
                <h2 style="text-align: center;color: whitesmoke;">RAM</h2>
                <br>
                <br>
                <br>
                <h2 style="text-align: center;color: whitesmoke;">Storage</h2>
                <br>
                <br>
                <br>
            </div>
        </div>

        <div class="col-6">
            <h3 style="text-align: center;color: whitesmoke;">Specify your laptop components</h3><br>
            <h5 style="color:whitesmoke;text-align: center;">
            Selecting the right laptop components is pivotal for an optimal computing experience. Begin by assessing your usage – whether it's casual, professional, or gaming-oriented. The processor (CPU) serves as the laptop's brain, with options like Intel i5, i7, i9, or AMD Ryzen 5, 7, 9 catering to diverse needs. A robust graphics card (GPU), such as NVIDIA's RTX series, enhances gaming and creative tasks. Ensure ample Random Access Memory (RAM) for multitasking, and choose between Solid State Drives (SSD) and Hard Disk Drives (HDD) based on speed and storage requirements. Consider display size and resolution, prioritize battery life for portability, and check for essential ports and connectivity options. Brand reputation, user reviews, and budget considerations round out a comprehensive approach to selecting components that align with your unique needs, ensuring a laptop that's not just powerful but tailored to your lifestyle.</h5>
            
        </div>
        
    </div>
    <hr>
    <h1 style="text-align: center;">Laptop Components</h1>
    <form method="post" action="" >
    <div class="row">
        <hr>
        <div class="col-6">
            <div class="row">
                <div class="col">
                    <h3>Sreacn Size : </h3>
                </div>
                <div class="col">                    
                    <select class="form-select" aria-label="Default select example"name="SelectSize"  id="SelectSize">
                        <option value="14" selected="selected" value="100">14 inches</option>
                        <option value="15" value="150">15 inches</option>
                        <option value="16" value="200">16 inches</option>
                        <option value="17" value="250">17 inches</option>
                        <option value="18" value="300">18 inches</option>
                    </select>
                </div>
            </div>      
            <br><br>
            <div class="row">
                <div class="col-4">
                        <div class="row">
                            <img class="thumbnail" src="7.png" onclick="showImage('7.png')" alt="Image 1">
                        </div>
                        <div>
                            <img class="thumbnail" src="8.jpg" onclick="showImage('8.jpg')" alt="Image 2">
                        </div>
                        <div class="row">
                            <img class="thumbnail" src="9.png" onclick="showImage('9.png')" alt="Image 3">
                        </div>
                        <script>
                        function showImage(imageSrc) {
                            var enlargedView = document.getElementById('enlarged-view');
                            enlargedView.src = imageSrc;
                        }
                        </script>
                </div>

                <div class="col-6">
                    <img id="enlarged-view" src="7.png" height="200px" width="500px" alt="Enlarged View">
                </div>
            </div>
        
            <hr>
            <br>
            <h3>&nbsp&nbsp Average width according to Screan size:</h3>
            <ul>
                <li><h5>14 inchs : 1.75 kg</h5></li>
                <li><h5> 15 inchs : 1.92 kg </h5></li>
                <li><h5> 16 inchs : 2.23 kg</h5></li>
                <li><h5> 17 inchs : 2.46 kg</h5></li>
                <li><h5> 18 inchs : 2.60 kg</h5></li>
            </ul>
            <br>
            <hr>
            <br>        
            <h3>&nbsp&nbsp Battery life in hours, minutes</h3>
            <ul>
                <li>13 h 51 m for 14 inches</li>
                <li>12 h 19 m for 15 inches</li>
                <li>11 h 56 m for 16 inches</li>
                <li>11 h 17 m for 17 inches</li>
                <li>10 h 31 m for 18 inches</li>
            </ul>
            
            
            <br>
            <br>
            
        </div>
        <div class="col-6" style="background-color:aliceblue;">
            <br>
            <h3>&nbsp Choose your base configruration</h3>
            <hr>
            <h4>Processor</h4>
    
            <input type="radio" class="custom-radio" name="options-base0" id="option" checked="checked" value="317">
            <label class="btn coler" for="option">Intel i5</label>

            <input type="radio" class="custom-radio" name="options-base0" id="option2" value="400">
            <label class="btn coler" for="option2">Intel i7</label>


            <input type="radio" class="custom-radio" name="options-base0" id="option3" value="700">
            <label class="btn coler" for="option3">Intel i9</label>

            <input type="radio" class="custom-radio" name="options-base0" id="option4"value="241.55">
            <label class="btn coler" for="option4">Ryzen 5</label>

            <input type="radio" class="custom-radio" name="options-base0" id="option5" value="399.9">
            <label class="btn coler" for="option5">Ryzen 7</label>

            <input type="radio" class="custom-radio" name="options-base0" id="option6" value="699.99" >
            <label class="btn coler" for="option6">Ryzen 9</label>
        
            <br>

            <hr>
            <br>
            <h3>Opreating System</h3>
            <div >
                <input type="radio" class="custom-radio" name="options-base1" id="option7" checked="checked" value="139.99">
                <label class="btn coler" for="option7">Windows 11 Home</label>

                <input type="radio" class="custom-radio" name="options-base1" id="option8" value="199.99" >
                <label class="btn coler" for="option8">Windows 11 Pro</label>
            </div>
            <br>
            <hr>
            <br>
            <h3>Graphics</h3>
            <div>
                <input type="radio" class="custom-radio" name="options-base2" id="option9" checked="checked" value="279">
                <label class="btn coler" for="option9" style="margin: 4px;">NVIDIA GeForce RTX 4060 <br>, 8 GB GDDR6</label>

                <input type="radio" class="custom-radio" name="options-base2" id="option10"  value="514">
                <label class="btn coler" for="option10" style="margin: 4px;">NVIDIA GeForce RTX 4070 <br> , 8 GB GDDR6</label>

                <input type="radio" class="custom-radio" name="options-base2" id="option11"  value="989">
                <label class="btn coler" for="option11" style="margin: 4px;">NVIDIA GeForce RTX 4080 <br>, 12 GB GDDR6</label>

                <input type="radio" class="custom-radio" name="options-base2" id="option12"  value="1599">
                <label class="btn coler" for="option12" style="margin: 4px;">NVIDIA GeForce RTX 4090 <br>, 16 GB GDDR6</label>
            </div>
            <script>
                
            </script>
            <br>
            <hr>
            <br>
            <h3>Memory</h3>
            <div>
                <input type="radio" class="custom-radio" name="options-base3" id="option13" checked="checked" value="47.99" >
                <label class="btn coler" for="option13">16 GB: 2 x 8 GB,<br> DDR5, 4800 MT/s</label>

                <input type="radio" class="custom-radio" name="options-base3" id="option14" value="83.75" >
                <label class="btn coler" for="option14">32 GB: 2 x 16 GB,<br> DDR5, 4800 MT/s</label>

                <input type="radio" class="custom-radio" name="options-base3" id="option15" value="169.99" >
                <label class="btn coler" for="option15">64 GB: 2 x 32 GB,<br> DDR5, 4800 MT/s</label>
            </div>
            <br>
            <hr>
            <br>
            <h3>Storage</h3>
            <div>
                <input type="radio" class="custom-radio" name="options-base4" id="option16"  checked="checked" value="19.99">
                <label class="btn coler" for="option16">128 GB SSD</label>

                <input type="radio" class="custom-radio" name="options-base4" id="option17"  value="39.99">
                <label class="btn coler" for="option17">256 GB SSD</label>

                <input type="radio" class="custom-radio" name="options-base4" id="option18"  value="59.99">
                <label class="btn coler" for="option18">512 GB SSD</label>

                <input type="radio" class="custom-radio" name="options-base4" id="option19"  value="89.99">
                <label class="btn coler" for="option19">1 TB SSD</label>
                
                <input type="radio" class="custom-radio" name="options-base4" id="option20"  value="134.99">
                <label class="btn coler" for="option20">2 TB SSD</label>
            </div>
            <script>
                
            </script>
            <br>
            <hr>
            <br>
            <h3>Display</h3>
            <div>
                <input type="radio" class="custom-radio" name="options-base5" id="option21"  checked="checked" value="250">
                <label class="btn coler" for="option21"> QHD+ (2560 x 1600) 240Hz <br> 3ms, ComfortView Plus,  <br> 100% DCI-P3, FHD IR Camera</label>

                <input type="radio" class="custom-radio" name="options-base5" id="option22" value="300" >
                <label class="btn coler" for="option22"> FHD+ (1920 x 1200) <br> 480Hz, 3ms, ComfortView <br> Plus, 100% DCI-P3, FHD IR Camera</label>
            </div>
            <br>
            <hr>
            <br>
            <h3>Color</h3>
            <div>
                <input type="radio" class="custom-radio" name="options-base6" id="option23"  checked="checked" value="Dark">
                <label class="btn coler" for="option23">Dark</label>

                <input type="radio" class="custom-radio" name="options-base6" id="option24"  value="White">
                <label class="btn coler"for="option24">White</label>

                <input type="radio" class="custom-radio" name="options-base6" id="option25"  value="Light Gray">
                <label class="btn coler" for="option25">Light Gray</label>

                <input type="radio" class="custom-radio" name="options-base6" id="option26"  value="Light Blue">
                <label class="btn coler" for="option26">Light Blue</label>
            </div>  
            <br>
            <hr>
            <br>
            <div class="row">
                <!-- Total sum display -->
                    <p>Prosser         : $<span id="ProsserPrice">0</span></p>
                    <p>Opreating System: $<span id="OSPrice">0</span></p>
                    <p>Graphic Card    : $<span id="GPUPrice">0</span></p>
                    <p>RAM memory      : $<span id="RAMPrice">0</span></p>
                    <p>Disk size       : $<span id="DiskPrice">0</span></p>
                    <p>Screen          : $<span id="Screan">0</span></p>
                    <p>Total Overall: $<span id="totalOverall" value="">0</span></p>
                    <input type="hidden" name="mytotal" id="mytotal" value="">
            </div>
            <script>
                // Add event listener to each radio button in Prosseres
                var radioGroup1 = document.getElementsByName('options-base0');
                radioGroup1.forEach(function(radio) {
                    radio.addEventListener('change', updateTotalGroup1);
                });

                // Add event listener to each radio button in OS
                var radioGroup2 = document.getElementsByName('options-base1');
                radioGroup2.forEach(function(radio) {
                    radio.addEventListener('change', updateTotalGroup2);
                });

                // Add event listener to each radio button in GPU
                var radioGroup3 = document.getElementsByName('options-base2');
                radioGroup3.forEach(function(radio) {
                    radio.addEventListener('change', updateTotalGroup3);
                });

                //Add event listener to each radio button in RAM
                var radioGroup4 = document.getElementsByName('options-base3');
                radioGroup4.forEach(function(radio) {
                    radio.addEventListener('change', updateTotalGroup4);
                });

                //Add event listener to each radio button in DISKSIZE
                var radioGroup5 = document.getElementsByName('options-base4');
                radioGroup5.forEach(function(radio) {
                    radio.addEventListener('change', updateTotalGroup5);
                });

                //Add event listener to each radio button in screen
                var radioGroup6 = document.getElementsByName('options-base5');
                radioGroup6.forEach(function(radio) {
                    radio.addEventListener('change', updateTotalGroup6);
                });

                // Initial update
                updateTotalGroup1();
                updateTotalGroup2();
                updateTotalGroup3();
                updateTotalGroup4();
                updateTotalGroup5();
                updateTotalGroup6();
                updateTotalOverall();

                function updateTotalGroup1() {
                    var totalGroup1 = getSelectedValue(radioGroup1);
                    document.getElementById('ProsserPrice').textContent = totalGroup1.toFixed(2);
                    updateTotalOverall();
                }

                function updateTotalGroup2() {
                    var totalGroup2 = getSelectedValue(radioGroup2);
                    document.getElementById('OSPrice').textContent = totalGroup2.toFixed(2);
                    updateTotalOverall();
                }

                function updateTotalGroup3() {
                    var totalGroup3 = getSelectedValue(radioGroup3);
                    document.getElementById('GPUPrice').textContent = totalGroup3.toFixed(2);
                    updateTotalOverall();
                }
                function updateTotalGroup4() {
                    var totalGroup4 = getSelectedValue(radioGroup4);
                    document.getElementById('RAMPrice').textContent = totalGroup4.toFixed(2);
                    updateTotalOverall();
                }
                function updateTotalGroup5() {
                    var totalGroup5 = getSelectedValue(radioGroup5);
                    document.getElementById('DiskPrice').textContent = totalGroup5.toFixed(2);
                    updateTotalOverall();
                }

                function updateTotalGroup6() {
                    var totalGroup6 = getSelectedValue(radioGroup6);
                    document.getElementById('Screan').textContent = totalGroup6.toFixed(2);
                    updateTotalOverall();
                }

                function getSelectedValue(radioButtons) {
                    for (var i = 0; i < radioButtons.length; i++) {
                        if (radioButtons[i].checked) {
                            return parseFloat(radioButtons[i].value);
                        }
                    }
                    return 0;
                }

                function updateTotalOverall() {
                    var totalGroup1 = parseFloat(document.getElementById('ProsserPrice').textContent);
                    var totalGroup2 = parseFloat(document.getElementById('OSPrice').textContent);
                    var totalGroup3 = parseFloat(document.getElementById('GPUPrice').textContent);
                    var totalGroup4 = parseFloat(document.getElementById('RAMPrice').textContent);
                    var totalGroup5 = parseFloat(document.getElementById('DiskPrice').textContent);
                    var totalGroup6 = parseFloat(document.getElementById('Screan').textContent); 
                    var totalOverall = totalGroup1 + totalGroup2 + totalGroup3 +totalGroup4+totalGroup5+totalGroup6;
                    
                    document.getElementById('totalOverall').textContent = totalOverall.toFixed(2);
                    document.getElementById('mytotal').value= document.getElementById('totalOverall').innerText;
                }
            </script>
            <div class="row">
                <button type="submit" name="submit" style="background-color:lightblue;">Cart</button>
            </div>
        </div>
    </div>
    </form>
    <hr/>
    <div class="container">
       <footer>
         <table>
         <tr >
            <td rowspan="4"><img src="logo.png" style="width: 80%; height: 80;" alt="logo" ></td>
         </tr>
         <tr>
            <td colspan="1"><strong>Address:</strong></td>
            <td colspan="2"><strong>Phone:</strong></td>
            <td></td>
            <td colspan="3"><strong> Email:</strong></td>

         </tr>  
                       
         <tr>
            <th colspan="1"><h6> Seeb Al Khoudh SQU SEPS Muscat OM, 123</h6></th>
            <th colspan="2"><h6>+968 99999999</h6></th>
            <th> </th>
            <th colspan="3"><h6>exceptionLaptop20@gmail.com</h6></th>

         </tr>
         <tr>
            <th colspan="7"></th>
            <th colspan="3"><button style="border: 30px;" class="btn btn-dark btn-outline-warning"><B>Countact Us</B></button></th>
         </tr>
         <tr>
            <td ></td>
            <td colspan="2"><strong>Follow us:</strong></td>
         </tr>
         <tr>
            <th colspan="2"></th>
            <th colspan="5">
                 <table>
                   <tr>
                     <th>
                          <a href="https://www.instagram.com/"  style=" margin: 2px;">
                          <img src="instagram.png" alt="Instagram"  style="width: 50px; height: 50px;">
                          </a>
                     </th>
                     <th>
                         <a href="https://www.youtube.com/"  style=" margin: 2px;">
                         <img src="youtube.png" alt="youtube"  style="width: 50px; height: 50px;">
                         </a>
                     </th>
                     <th>
                         <a href="https://twitter.com/"  style=" margin: 2px;">
                         <img src="twitter.png" alt="twitter"  style="width: 50px; height: 50px;">
                         </a>
                     </th>
                     <th>
                         <a href="https://www.facebook.com/"  style=" margin: 2px;">
                         <img src="facebook.png" alt="facebook"  style="width: 50px; height: 50px;">
                         </a>
                     </th>

                    </tr>
                 </table>
          </table>
        </footer>
        <hr/>
    </div>
    <?php 
    $id=1;
    $price = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Handle form submission and save to MySQL
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "el";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT COUNT(*) as row_count FROM laptops";
        $result = $conn->query($sql);
        if($result){
            $row = $result->fetch_assoc();
            $rowCount = $row["row_count"];
            //nexxt ID
            $id =$rowCount +1;
        }
        $screensize=$_POST['SelectSize'];
        $cpu;
        if(isset($_POST["options-base0"])){
            $cpu= $_POST["options-base0"];
        }

        $os;
        if(isset($_POST["options-base1"])){
            $os= $_POST["options-base1"];
        }
        $gpu;
        if(isset($_POST["options-base2"])){  
            $gpu= $_POST["options-base2"];
        }
        $ram;
        if(isset($_POST["options-base3"])){
            $ram= $_POST["options-base3"];
        }
        $storage;
        if(isset($_POST["options-base4"])){
            $storage= $_POST["options-base4"];   
        }

        $screen;
        if(isset($_POST["options-base5"])){
            $screen= $_POST["options-base5"];
        }

        $selectedColor;
        if(isset($_POST["options-base6"])){
            $selectedColor = $_POST["options-base6"];

        }
        //$color = $_POST["color"];
        $price=$cpu+$os+$gpu+$ram+$storage+$screen;
        $sql = "INSERT INTO laptops (id,cpu, os, gpu, ram, disk,screensize, screendtails, color, price) VALUES ('$id','$cpu', '$os','$gpu', '$ram', '$storage','$screensize','$screen','$selectedColor','$price')";

        if ($conn->query($sql) === TRUE) {
            
            echo "<h>Configuration saved successfully!</h1>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>

</body>
</html>
