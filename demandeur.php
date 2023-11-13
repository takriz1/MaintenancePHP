<?php include "connexion.php"; 
$query = "SELECT * FROM `espace_demandeur` where id_user='".$_SESSION['id_u']."' ";

            $exec = mysqli_query($conn,$query);
            $array = mysqli_fetch_array($exec);
            $id_d = $array['id_d'];
            $_SESSION['id_d'] = $id_d;
            
            ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Page d'accueil</title>
    <link rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <!--?php  
     if (isset($_SESSION['id_u'])) {
        echo 'Je te connais toujours ! Tu es ' . $_SESSION['id_u'] . 
            ' et tu as ' . $_SESSION['id_u'] . ' ans.';
    }
    else {
        echo "Je ne te connais pas...";
    }
    
    
    
    ?-->
   
    <nav class="navbar">
<img class="logo" src="leoni.png">
            <ul>    
            <li><a class="active" href="index.php">Accueil</a></li>
                <li><a href="logdemandeur.php" >Espace Demandeur</a></li>
                <li><a href="logtechnicien.php">Espace Technicien</a></li>
                <li><a href="logchefTechnique.php" >Chef d'Equipe</a></li>
                <li><a href="logadmin.php" >Espace Admin</a></li>
                <li><a href="signup.php">registre</a></li>
                <li><a href="logout.php">deconnecter</a></li>  
            </ul>
        </nav>

    <div class="container">
        <form action="register.php" method="POST">
            <p> Demande n°<?php echo $id_d; ?></p>
            <p class="para">nom </p><input type="text" placeholder="Demandeur" name="demandeur" value=<?php echo $_SESSION['nom']; ?>><br>
            <p class="para">Matricule </p><input type="number" placeholder="Matricule" name="matricule" value=<?php echo $_SESSION['matricule']; ?> ><br>
            <p class="para">Equipement </p> <input type="number" placeholder="numero de table" name="desk"><br>
            <p class="para">Service </p><input type="text" placeholder="Service" name="service"><br>
            <p class="para">Date </p> <input type="date" placeholder="Date d'arrêt" name="date"><br>
            <p class="para">Heure </p> <input type="time" placeholder="Heure d'arrêt" name="heure"><br>
            <!--input type="hidden" placeholder="Heure d'arrêt" name="id_u" value=""><br-->
                <input class="cls" type="submit" value="Valider" class="btnc"><br> 
 
               
               


        </form>
    </div>
    <script>
        // Récupération du dernier numéro de formulaire ou initialisation à 0
        let formNumber = parseInt(localStorage.getItem('formNumber')) || 0;

        // Incrémentation du numéro de formulaire
        formNumber++;

        // Enregistrement du nouveau numéro de formulaire dans le stockage local
        localStorage.setItem('formNumber', formNumber);

        // Mise à jour de l'élément HTML correspondant avec le nouveau numéro de formulaire
        document.getElementById('form-number').textContent = formNumber.toString();
    </script>
    
</body>
<style>
    * {
    margin: 0;
    padding: 0;
    outline: none;
}

body {
    margin-top : 100px;
    font-family: 'Roboto', sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
}

.navbar {
    position: fixed;
    height: 70px;
    width: 100%;
    top: 0;
    left: 0;
    background: rgba(70, 69, 69, 0.4);
    z-index: 9999;
}

.navbar .logo {
    width: 140px;
    height: auto;
    padding: 20px 10px;
}

.navbar ul {
    float: right;
    margin-right: 20px;
}

.navbar ul li {
    list-style: none;
    margin: 0 8px;
    display: inline-block;
    line-height: 80px;
}

.navbar ul li a {
    font-size: 10x;
    font-family: 'Roboto', sans-serif;
    color: white;
    padding: 6px 13px;
    text-decoration: none;
    transition: .4s;
}

.navbar ul li a.active,
.navbar ul li a:hover {
    background: rgb(103, 105, 218);
    border-radius: 2px;
}

.container {
    position: relative;
    border: solid 2px #000;
    
}

form {
    background: white;
    padding: 4rem;
    height: 500px;
    text-align: center;
    width: 300px;
}

p {
    color: blue;
    font-weight: 500;
    opacity: .7;
    font-size: 1.4rem;
    
}
.para {
    color: black;
    margin-bottom: 5px;
    font-size: 15px;
    text-align: left;
    margin-left: 40px;
    
}
input {
    background-color: rgba(255, 255, 255, 0.1);
    border: solid 1px #000;
    padding: 1rem;
    width: 200px;
    border-radius: 50px;
    font-weight: 500;
   
}
.cls {
    background: rgb(103, 105, 218);
    color : black;
   
}



</style>

</html>