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
    $name = $_POST["name"];
    $Matricule = $_POST["matricule"];
    $time = $_POST["time-field"];
    $table = $_POST["table"];
    $desc = $_POST["desc"];
    $Date = $_POST["date"];
    $what = $_POST["what"];
    $why = $_POST["why"];
    $where = $_POST["where"];
    $MCP = $_POST["MCP"];
    $MNP = $_POST["MNP"];
    $AUT = $_POST["AUT"];
    $piece1 = $_POST["piece1"];
    $qtt1 = $_POST["qtt1"];
    $piece2 = $_POST["piece2"];
    $qtt2 = $_POST["qtt2"];
    $piece3 = $_POST["piece3"];
    $qtt3 = $_POST["qtt3"];
    $piece4 = $_POST["piece4"];
    $qtt4 = $_POST["qtt4"];
    $piece5 = $_POST["piece5"];
    $qtt5 = $_POST["qtt5"];
    $piece6 = $_POST["piece6"];
    $qtt6 = $_POST["qtt6"];
    $piece7 = $_POST["piece7"];
    $qtt7 = $_POST["qtt7"];

    $the_time = date('h:i A', strtotime($time));   
    

   // $id = $_POST['id_u']; //
  
   $language=$_POST['tech'];


   $letters = "";
   foreach ($language as $key=>$value)
   {
    //echo $value.",";
    //$tech_value=$value;
    
    $letters .= $value.",";
   // $tech_value=$value.",";
   }

  

  

   


     $id = $_SESSION['id_u'] ;
          // Validate the user's inputs
    // Insert data into database
    
    $sql = "INSERT INTO `espace_technicien`( `first_name`, `matricule`, `time`, `table`, `description`,`piece1`,`qtt1` ,`piece2`,`qtt2`, `piece3`,`qtt3`, `piece4`,`qtt4`, `piece5`,`qtt5`, `piece6`,`qtt6`, `piece7`,`qtt7`, `what`, `why`,`where`, `id_user`, `tech`)
    VALUES ( '$name', '$Matricule', '$time', '$table', '$desc','$piece1','$qtt1','$piece2','$qtt2', '$piece3', '$qtt3', '$piece4', '$qtt4', '$piece5', '$qtt5', '$piece6', '$qtt6', '$piece7', '$qtt7', '$what', '$why', '$where', '$id',  '$letters')";

if (mysqli_query($conn, $sql)) {
header('location:index.php');

} else {
header('location:technicien.php?error=1');

}

     
   


    }
?>