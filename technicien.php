<?php include "connexion.php" ?>

<!DOCTYPE html>
<html>

<head>
    <title>Page avec une navbar et un tableau</title>
    <link rel="stylesheet" type="text/css" href="css/technicien.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
       
</head>

<body>
    <header>
        <nav>
            <div class="navbar">
              <a href="logout.php" style="color:white;">deconnecter</a>
                <div class="navbar-center">
                    <span>Espace technicien</span>
                </div>
            </div>
        </nav>
    </header>
    <div class="content">
      <form action="register-b.php" method="POST">
        <div class="left">
            <table class="technicien-service">
                <tr>
                    <th colspan="3">Service technique</th>
                </tr>
                <tr>
            

                    <td class="blue">Nom & Prenom</td>
                    <td class="blue">Matricule</td>
                    <td class="blue">Fin d'approbation</td>
                    <td class="blue">numero de table</td>
                  
                </tr>
                <tr>
                    <td class="blue"><input type="text" name="name" value=<?php echo $_SESSION['nom']; echo $_SESSION['prenom'];?>></td>
                    <td class="blue"><input type="number" name="matricule" value=<?php echo $_SESSION['matricule']; ?>></td>
                    <td class="blue"><input type="text" name="time-field"></td>
                    <td class="blue"><input type="number" name="table"></td>

                </tr>

            </table>
            <textarea placeholder="Description de la panne" name="desc"></textarea>
            <label>Code Default what</label>
            <select name="what">
                <option value="1 mécanique">Mécanique</option>
                <option value="2 électrique">Électrique</option>
                <option value="3 logiciel">logiciel</option>
                <option value="4 Hydraulique">Hydraulique</option>
                <option value="5 Maintenance">Maintenance</option>
                <option value="6 Inspection">Inspection</option>
            </select>
            <label>Code Default why</label>
            <select name="why">
                <option value="1 Cassure">Cassure</option>
                <option value="2 Usure">Usure</option>
                <option value="3 Saleté">Saleté</option>
                <option value="4 Blocage">Blocage</option>
                <option value="5 Desserage">Desserage</option>
                <option value="6 Surcharge">Surcharge</option>
                <option value="7 Mauvaise Réglage">Mauvaise Réglage</option>
                <option value="8 Mauvaise Utilisation">Mauvaise Utilisation</option>
                <option value="9 Alimentation">Alimentation</option>
                <option value="10 Court Circuit">Court Circuit</option>
            </select>
            <label>Code Default where</label>
            <select name="where">
       <option value="c01 unité d'entrainement et dressage cable">C01 unité d'entrainement et dressage cable</option>
       <option value="c02 unité d'extraction et pivotement">C02 unité d'extraction et pivotement</option>
       <option value="c03 presse de sertissage">C03 presse de sertissage</option>
       <option value="c04 station joint ">C04 station joint </option>
       <option value="c05 bloc de coupe">C05 bloc de coupe</option>
       <option value="c06 bande transposteuse ">C06 bande transposteuse </option>
       <option value="c07 armoire electrique">C07 armoire electrique</option>
       <option value="c08 unité de maintenance electrovanne">C08 unité de maintenance electrovanne</option>
   <option value="c09 pc software">C09 pc software</option>
   <option value="TOR1 tete machine ">TOR1  tete machine</option>
   <option value="TOR2 chariot ">TOR2 chariot</option>
   <option value="TOR3armoire electrique">TOR3 armoire electrique</option>
   
   
   

    
 <option value="PT01 MMC-LTN">PT01 MMC-LTN</option>
 <option value="PT02 MMC-slovaki">PT02 MMC-slovaki</option>
 <option value="PT03 MMC-KT">PT03 MMC-KT</option>
 <option value="PT04 TSK ">PT04 TSK </option>
 <option value="PT05 divmac">PT05 divmac</option>
 <option value="PT06 EMDEF ">PT06 EMDEF </option>
 <option value="PT07 creasof">PT07 creasof</option>
 <option value="USS01 tete de machine">USS01 tete de machine</option>
<option value="USS02 generateur et cable ">USS02 generateur et cable</option>
<option value="USS03 PC software ">uSS03 PC software </option>
<option value="USS04 automate ">USS04 automate</option>
<option value="CHMO01 armoire electrique">CHMO01 armoire electrique</option>
<option value="CHMO02 eclairage chaine">CHMO02 eclairage chaine</option>
<option value="CHMO03 systeme de securité">CHMO03 systeme de securité</option>
<option value="CHMO04 support wagons">CHMO04 support wagons</option>
<option value="CHMO05 attache rapide chaine">CHMO05 attache rapide chaine</option>
<option value="CHMO06 roues">CHMO06 roues</option>
<option value="LAD01 capteur postion poste ">LAD01 capteur postion poste</option>
<option value="LAD02 armoire electrique  ">LAD02 armoire electrique</option>
<option value="LAD03 bouton d'urgence ">LAD03 bouton d'urgence</option>
<option value="LAD04 moteur ">LAD04 moteur</option>
<option value="PRESS01 carte electronique ">PRESS01 carte electronique</option>
<option value="PRESS02 coupr déchet ">PRESS02 coupr déchet</option>
<option value="PRESS03 systeme de securité ">PRESS03 systeme de securité</option>
<option value="PRESS04 pédales ">PRESS04 pédales </option>
<br>
<br>
<br>
<br>
<br>
        </div>
        <div class="right">
            <div class="main-container">
                <div class="right-side">
                  <table>
                    <tr>
                      <td><input type="checkbox" name ="tech[]" value="MCP"> MCP-maintenance curative planifiée</td>
                      <td><input type="checkbox" name="tech[]" value="MNP"> MNP-maintenance non planifiée</td>
                      <td><input type="checkbox" name="tech[]" value="AUT"> AUT-travaux divers et amélioration</td>
                    </tr>
                  </table>
                  <table>
                    <tr>
                      <th>Pièce à rechange TZ numéro</th>
                      <th>Quantité</th>
                    </tr>
                    <tr>
                      <td><input type="text" name="piece1"></td>
                      <td><input type="text" name="qtt1"></td>
                    </tr>
                      <td><input type="text" name="piece2"></td>
                      <td><input type="text" name="qtt2"></td>
                    </tr>
                      <td><input type="text" name="piece3"></td>
                      <td><input type="text" name="qtt3"></td>
                    </tr>
                    <td><input type="text" name="piece4"></td>
                    <td><input type="text" name="qtt4"></td>
                </tr>
                    <td><input type="text" name="piece5"></td>
                    <td><input type="text" name="qtt5"></td>
                </tr>
                    <td><input type="text" name="piece6"></td>
                    <td><input type="text" name="qtt6"></td>
                </tr>
                    <td><input type="text" name="piece7"></td>
                    <td><input type="text" name="qtt7"></td>
                    <tr>
                    
                    </tr>
                  </table>
                  <button class="btn" type="submit" name="submit">Fin de tache</button>
                  <a href="logout.php">
                  

                
                </div>
                <!--div class="right-side"></div-->
              </div>
            
          
          
        </div>
        </form>
       
    </div>
 <div>


 </div>
   
</body>
</html>