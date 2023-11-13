<?php
$id =$_GET['id'];

$conn = mysqli_connect('localhost','root','','hamza');


$query = "UPDATE `users` SET `id_role`= 2 WHERE id_u=$id ";
//echo $query;



// 4- Exécution de la requete
$exec = mysqli_query($conn,$query);
header('location:usersPosts.php');

				  
?>