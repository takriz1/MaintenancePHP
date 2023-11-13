<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hamza";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

   

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        session_start();
    // Get the user's inputs from the form
    $num = $_POST["numdepartement"];
    $name = $_POST["departement"];
    
    
    

  

  
   
          // Validate the user's inputs
    // Insert data into database
   
    $sql = "INSERT INTO `service`( `num_dep`, `name_dep`)
    VALUES ( '$num', '$name' )";




if (mysqli_query($conn, $sql)) {
header('location:usersPosts.php');

} else {
header('location:addService.php?error=1');

}

     
   


    }
?>