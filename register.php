<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

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
    $Demandeur = $_POST["demandeur"];
    $Matricule = $_POST["matricule"];
    $Service = $_POST["service"];
    $Desk = $_POST["desk"];
    $Date = $_POST["date"];
    $Heure = $_POST["heure"];
   // $id = $_POST['id_u']; //
   $the_time = date('h:i A', strtotime($Heure));



     $id = $_SESSION['id_u'] ;

     
          // Validate the user's inputs
    // Insert data into database
   
    $sql = "INSERT INTO `espace_demandeur`( `matricule`, `service`, `desk`, `date`, `heure`, `id_user` )
    VALUES ( '$Matricule', '$Service', '$Desk', '$Date', '$the_time', '$id')";

if (mysqli_query($conn, $sql)) {
header('location:SeeTechnicien.php');

} else {
header('location:demandeur.php?error=1');

}

     
   


    }
?>