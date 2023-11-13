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
        <form action="authentechnicien.php" method="POST">
        <?php if(isset($_GET['error'])) { ?>
                <p style="color:red;">ERROR! USERNAME OR PASSWORD IS INCORRECT</p>
                        <?php } else { ?>
                            <p> Authentification </p>
                             <?php }?> 
                             <p class="para">Matricule </p><input type="number" placeholder="" name="matricule"><br>
           <p class="para">Mot de Passe</p><input type="password" placeholder="" name="password"><br> 
            <input class ="cls" type="submit" name ="submit" value="Valider"><br>
            
                

        </form>

        <div class="drop drop-1"></div>
        <div class="drop drop-2"></div>
        <div class="drop drop-3"></div>
        <div class="drop drop-4"></div>
       
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
    border: solid 2px #000;
    
}

form {
    background: white;
    padding: 4rem;
    height: 450px;
    text-align: center;
    width: 300px;
}

p {
    color: blue;
    font-weight: 500;
    opacity: .7;
    font-size: 1.4rem;
    margin-bottom: 45px;
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
    margin-bottom: 20px;
}
.cls {
    background: rgb(103, 105, 218);
    color : black;
    margin-top: 120px;
}



</style>
    
</body>
</body>

</html>