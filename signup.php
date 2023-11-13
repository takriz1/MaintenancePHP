<?php include "connexion.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Page d'accueil</title>
    <link rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form action="authentificationsign.php" method="POST">
                            <p>Registre</p>                
                            <p class="para">Nom</p> <input type="text" placeholder="firstname" name="nom" required><br>
                            <p class="para">Prenom</p>  <input type="text" placeholder="lastname" name="prenom" required><br>
                            <p class="para">Email</p>  <input type="text" placeholder="email" name="mail" required><br>
                            <p class="para">Matricule</p> <input type="number" placeholder="Matricule" name="matricule" required><br>
                            <p class="para">Mot de passe</p> <input type="password" placeholder="password" name="password" required><br>
                            <input  class="cls" type="submit" value="Valider"><br>
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
    margin-top: 50px;
    margin-bottom : 20px;
    font-family: 'Roboto', sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
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
    margin-bottom:30px;
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
    margin-top: 80px;
   
}
</style>

</html>