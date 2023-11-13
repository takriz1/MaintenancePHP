<?php include "connexion.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Page d'accueil</title>
    <link rel="stylesheet" type="text/css"> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
    <nav class="navbar">
            <img class="logo" src="leoni.png">
            <ul>
            <li><a class="active" href="index.php">Accueil</a></li>
                <li><a href="logdemandeur.php" >Espace Demandeur</a></li>
                <li><a href="logtechnicien.php">Espace Technicien</a></li>
                <li><a href="logchefTechnique.php" >Chef d'Equipe</a></li>
                <li><a href="logadmin.php" >Espace Admin</a></li>
                <li><a href="signup.php">registre</a></li>
                
            </ul>
        </nav>
        <div class="center">
            <h1 style="font-size:50px; text-transform:uppercase;"> LEONI wiring systems</h1>
        </div>
</body>
<style>
    * {
    padding: 0;
    margin: 0;
}

body {
    font-family: 'Roboto', sans-serif;
}

.wrapper {
    background-image: url("siii.png");
    background-size: cover;
    height: 100vh;
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

.wrapper .center {
    
    position: absolute;
    left: 20%;
    top: 25%;
    transform: translate(-50%, -50%);
    font-family: 'Roboto', sans-serif;
    user-select: none;
    height: 100px;
    width: 500px;
}

.center h1 {
    color: white;
    font-size: 50px;
    font-weight: bold;
    text-align: center;
    text-transform: uppercase;
    font-family: 'Roboto', sans-serif;
}

.center h2 {
    color: white;
    font-size: 30px;
    font-weight: bold;
    margin-top: 10px;
    width: 885px;
    text-align: center;
}

.center .buttons {
    margin: 35px 150px;
}

.buttons button {
    height: 50px;
    width: 200px;
    font-size: 14px;
    font-weight: 600;
    color: #ffff;
    background: rgb(103, 105, 218);
    outline: none;
    cursor: pointer;
    border: 1px solid rgb(103, 105, 218);
    border-radius: 25px;
    transition: .4s;
}

.buttons .btn2 {
    margin-left: 25px;
}

.buttons button:hover {
    background: rgb(82, 65, 161);
}
</style>
</html>