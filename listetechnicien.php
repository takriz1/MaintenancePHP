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
                <div class="navbar-center">
                    <span>Espace technicien</span>
                </div>
            </div>
        </nav>
    </header>
    <div class="content">
        <div class="left">
            <table class="technicien-service">
                <thead>
                    <tr>
                    <th class="blue">Nom & Prenom</th>
                    <th class="blue">Matricule</th>
                    <th class="blue">Heure</th>
                    <th class="blue">Description</th>
                    <th class="blue">piece1</th>
                    <th class="blue">qtt1</th>
                    <th class="blue">piece2</th>
                    <th class="blue">qtt2</th>
                    <th class="blue">piece3</th>
                    <th class="blue">qtt3</th>
                    <th class="blue">piece4</th>
                    <th class="blue">qtt4</th>
                    <th class="blue">piece5</th>
                    <th class="blue">qtt5</th>
                    <th class="blue">piece6</th>
                    <th class="blue">qtt6</th>
                    <th class="blue">piece7</th>
                    <th class="blue">qtt7</th>
                    <th class="blue">what</th>
                    <th class="blue">why</th>
                    <td class="blue">where</th>
                    <th class="blue">tech</th>
                    
                    </tr>
                      </thead>
                      <tbody>
                            <?php 
                                        
 
                                        // 3- Préaparation de la requete
                                        
 
                                        $query = "SELECT * FROM `espace_technicien`  ";
                                        
                                        //echo $query;
                                        
                                        
                                        // 4- Exécution de la requete
                                        

                                        $exec = mysqli_query($conn,$query);
                                        while($array = mysqli_fetch_array($exec)){
                                        $name			= $array['first_name'];
                                        $matricule			= $array['matricule'];
                                        $time 	= $array['time'];
                                        $description 	= $array['description'];
                                        $piece1 	= $array['piece1'];
                                        $qtt1 	= $array['qtt1'];
                                        $piece2 	= $array['piece2'];
                                        $qtt2 	= $array['qtt2'];
                                        $piece3 	= $array['piece3'];
                                        $qtt3 	= $array['qtt3'];
                                        $piece4 	= $array['piece4'];
                                        $qtt4 	= $array['qtt4'];
                                        $piece5 	= $array['piece5'];
                                        $qtt5 	= $array['qtt5'];
                                        $piece6 	= $array['piece6'];
                                        $qtt6 	= $array['qtt6'];
                                        $piece7 	= $array['piece7'];
                                        $qtt7 	= $array['qtt7'];
                                        $what	= $array['what'];
                                        $why		= $array['why'];
                                        $where		= $array['where'];
                                        $tech 		= $array['tech'];
                                        
                                        
                                        
                                        ?>         
                              <tr>
                                <td><?php echo $name; ?></td>
                                <td><?php echo $matricule; ?></td>
                                <td><?php echo $time; ?></td>
                                <td><?php echo $description; ?></td>
                                <td><?php echo $piece1; ?></td>
                                <td><?php echo $qtt1; ?></td>
                                <td><?php echo $piece2; ?></td>
                                <td><?php echo $qtt2 ?></td>
                                <td><?php echo $piece3; ?></td>
                                <td><?php echo $qtt3; ?></td>
                                <td><?php echo $piece4; ?></td>
                                <td><?php echo $qtt4; ?></td>
                                <td><?php echo $piece5; ?></td>
                                <td><?php echo $qtt5; ?></td>
                                <td><?php echo $piece6; ?></td>
                                <td><?php echo $qtt6; ?></td>
                                <td><?php echo $piece7; ?></td>
                                <td><?php echo $qtt7; ?></td>
                                <td><?php echo $what; ?></td>
                                <td><?php echo $why; ?></td>
                                <td><?php echo $where; ?></td>
                                <td><?php echo $tech; ?></td>
                                
                              </tr>
                              <?php } ?>
                              </tbody>
                          </table>

            
        </div>      
 </div>
   
</body>
</html>