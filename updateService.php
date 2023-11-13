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
    $id_service = $_POST["select_service"];
    $id = $_POST["id"];
    $date = $_POST["date"];
        
    

  

  
   
          // Validate the user's inputs
    // Insert data into database
   
    $sql = "INSERT INTO `user_service`( `id_s`, `id_u`, `date_service`)
    VALUES ( '$id_service', '$id', '$date' )";




if (mysqli_query($conn, $sql)) {
header('location:usersPosts.php');

} else {
header('location:addService.php?error=1');

}

     
   


    }
?>