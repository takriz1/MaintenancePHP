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
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["mail"];
    $matricule = $_POST["matricule"];
    $password = $_POST["password"];
    
    

  

  
   
          // Validate the user's inputs
    // Insert data into database
   
    $sql = "INSERT INTO `users`( `nom`, `prenom`, `email`, `matricule`, `motdepasse` )
    VALUES ( '$nom', '$prenom',' $mail', '$matricule', '$password')";




if (mysqli_query($conn, $sql)) {
header('location:index.php');

} else {
header('location:signup.php?error=1');

}

     
   


    }
?>