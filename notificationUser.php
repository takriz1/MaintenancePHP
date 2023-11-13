<?php 
include "connexion.php";
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$id =$_GET['id'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $promptValue = $_POST['promptValue'];


    

try {
    // get mail of the user who added the product
$query = "SELECT `email` FROM `users` WHERE id_u=$id";
$exec = mysqli_query($conn,$query);
$array = mysqli_fetch_array($exec);
$mail_userget 	= $array['email']; 

//echo $mail_userget ;
//return
    //Server settings
                         
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp-relay.sendinblue.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'hamzakhlifa311@gmail.com';                     //SMTP username
    $mail->Password   = 'tJkzsNH1mW0ZwEYn';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('hamzakhlifa311@gmail.com', 'Mailer');
    $mail->addAddress($mail_userget, 'Joe User');     //Add a recipient
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Notification de reclamation';
    $mail->Body    = ' <b>'.$promptValue.'</b>';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
header('location:usersPosts.php');
?>