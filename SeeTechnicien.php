<?php include "connexion.php" ?>
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
                <li><a href="signup.php">Registre</a></li>
                <li><a href="logout.php">déconnecter</a></li>
                
            </ul>
        
            <head>
<title>Ajouter un lien</title>
</head><center>
<body>
<h1>Liste des Techniciens Disponible</h1> 
<a href="https://docs.google.com/spreadsheets/d/1axpGzsDfkxqTDsylLF9X58b9lRdW-DXedKFhX_yVcOc/edit#gid=0" target="_blank">cliquier ici
</body>
</html> 
        </nav>
        <table class="styled-table">
        <thead>
                              <tr>
                                <th>Nom & Prénom</th>
                                <th>Prénom</th>
                                <th>Email</th>
                                <th>Matricule</th>
                                <th>Envoyé Message</th>
                                
                                <html>
                      
                                
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
                                        
 
                                        // 3- Préaparation de la requete
                                        
 
                                        $query = "SELECT * FROM `users` where id_role=3 ";
                                        
                                        //echo $query;
                                        
                                        
                                        // 4- Exécution de la requete
                                        

                                        $exec = mysqli_query($conn,$query);
                                        while($array = mysqli_fetch_array($exec)){
                                       $id_u = $array['id_u'];
                                       $name = $array['nom'];
                                       $lastname = $array['prenom'];
                                       $mail = $array['email'];
                                       $matricule = $array['matricule'];
                                        
                                        
                                        
                                        ?> 
                                <tr class="active-row">
                                <td><?php echo $name; ?></td>
                               <td><?php echo $lastname; ?></td>
                                <td><?php echo $mail; ?></td>
                                <td><?php echo $matricule; ?></td>
                                <td>
                                <form action="notificationUser1.php?id=<?php echo $id_u; ?>" method="POST">
                                <button onclick="openPrompt<?php echo $id_u; ?>()">Write Message</button>
                                <input class ='btnc' type="hidden" id="promptValue<?php echo $id_u; ?>" name="promptValue">
                                <input class ='btnc' type="submit" value="envoyer">
                              </form>
                                </td>
                                </tr>

                                
                              <script>
                          function openPrompt<?php echo $id_u; ?>() {
                            var promptValue = prompt("Enter a value:");
                            document.getElementById("promptValue<?php echo $id_u; ?>").value = promptValue;
                          }
                        </script>
                                <?php } ?>
                            
</tbody>

        </table>

    
   
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
   
    height: 100vh;
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
}

.navbar .logo {
    width: 140px;
    height: auto;
    padding: 20px 100px;
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
    
}
.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
p {
    color: white;
    font-weight: 500;
    opacity: .7;
    font-size: 1.4rem;
    margin-bottom: 45px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
}

input {
    background: transparent;
    border: none;
    border-left: 1px solid rgba(255, 255, 255, .3);
    border-top: 1px solid rgba(255, 255, 255, .3);
    padding: 1rem;
    width: 200px;
    border-radius: 50px;
    backdrop-filter: blur(5px);
    -webkit-backdrop-filter: blur(5px);
    -moz-backdrop-filter: blur(5px);
    box-shadow: 4px 4px 60px rgba(0, 0, 0, .2);
    color: white;
    font-weight: 500;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
    transition: all .3s;
    margin-bottom: 20px;
}

input:hover,
input[type="email"]:focus,
input[type="password"]:focus {
    background: rgba(255, 255, 255, 0.1);
    box-shadow: 4px 4px 60px 8px rgba(0, 0, 0, 0.2);
}

input[type="button"] {
    margin-top: 10px;
    width: 150px;
    font-size: 1rem;
    cursor: pointer;
}

 ::placeholder {
    color: #fff;
}
.btnc {
    background: black;
}
.drop {
    background: rgba(255, 255, 255, .3);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-radius: 10px;
    border-left: 1px solid rgba(255, 255, 255, .3);
    border-top: 1px solid rgba(255, 255, 255, .3);
    box-shadow: 10px 10px 60px -8px rgba(0, 0, 0, 0.2);
    position: absolute;
    transition: all 0.2s ease;
}

.drop-1 {
    height: 80px;
    width: 80px;
    top: -20px;
    left: -40px;
    z-index: -1;
}

.drop-2 {
    height: 80px;
    width: 80px;
    bottom: -30px;
    right: -10px;
}

.drop-3 {
    height: 100px;
    width: 100px;
    bottom: 120px;
    right: -50px;
    z-index: -1;
}

.drop-4 {
    height: 120px;
    width: 120px;
    top: -60px;
    right: -60px;
}

.drop-5 {
    height: 60px;
    width: 60px;
    bottom: 170px;
    left: 90px;
    z-index: -1;
}
</style>

</html>