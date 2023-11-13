<?php
// 1- Récupération des variables
$matricule 	= $_POST['matricule'];
$pass 	= $_POST['password'];

//echo "Votre Nom : ".$esem;

// 2- Connexion au serveur + base de donnée
$conn = mysqli_connect('localhost','root','','hamza');



// Check connection


// 3- Préaparation de la requete
$query = "SELECT * FROM `users` WHERE matricule='$matricule' and motdepasse='$pass' and id_role=5";



//echo $query;


// 4- Exécution de la requete
$exec = mysqli_query($conn,$query);

// 5- vérification
$num = mysqli_num_rows($exec);

if($num == 1){
	session_start();
	//$_SESSION['auth'] = true;
	
	$array = mysqli_fetch_array($exec);
	$nom 	= $array['nom'];
	$prenom = $array['prenom'];
	
	$_SESSION['nom'] = $nom;
	$_SESSION['prenom'] = $prenom;
	$_SESSION['id_u'] = $id;
	header("location:ChefTechnique.php");
}else{
	header("location:logChefTechnique.php?error=1");
	
}

?>