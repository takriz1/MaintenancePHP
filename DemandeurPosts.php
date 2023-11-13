<?php include "connexion.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
 

    <title>Espace Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
</head>
<body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
    <?php include "navbarAdmin.php"; ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php include "sidebarAdmin.php"; ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
           
            <!-- Page Title Header Ends-->
        
            <div class="">
            <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <h4 class="card-title mb-0">Demandeur Information</h4>
                          <a href="#"><small>Show All</small></a>
                        </div>
                        
                        <div class="table-responsive">
                          <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th>Nom & Prénom</th>
                                
                                <th>Matricule</th>
                                <th>Service</th>
                                <th>Table</th>
                                <th>Date</th>
                                <th>Heure</th>
                                <th>numero de demande</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
                                        
 
                                        // 3- Préaparation de la requete
                                       $query1 = "SELECT * FROM `users` WHERE id_role=2 ";
 
                                        
                                        //echo $query;
                                        
                                        
                                        // 4- Exécution de la requete
                                        $exec1 = mysqli_query($conn,$query1);
                                        while($array = mysqli_fetch_array($exec1))
                                        $nom 			= $array['nom'];
                                        $prenom 			= $array['prenom'];
                                        
                                       
                                        $query = "SELECT * FROM `espace_demandeur` ";
                                              
                                        $exec = mysqli_query($conn,$query);
                                       while($array1 = mysqli_fetch_array($exec)){
                                        $id_d			= $array1['id_d'];
                                        $matricule			= $array1['matricule'];
                                        $Service		= $array1['service'];
                                        $date 		= $array1['date'];
                                        $heure 	= $array1['heure'];
                                        $desk	= $array1['desk'];
                                        
                                        $id_user=$array1['id_user'];

                                           // 3- Préaparation de la requete
                                       $query1 = "SELECT * FROM `users` WHERE id_u=$id_user";
 
                                        
                                       //echo $query;
                                       
                                       
                                       // 4- Exécution de la requete
                                       $exec1 = mysqli_query($conn,$query1);
                                       while($array = mysqli_fetch_array($exec1))
                                       $nom 			= $array['nom'];
                                       $prenom 			= $array['prenom'];
                                        
                                        ?>         
                              <tr>
                                <td><?php echo $nom; echo $prenom; ?></td>
                                <td><?php echo $matricule; ?></td>
                                <td><?php echo $Service; ?></td>
                                <td><?php echo $desk; ?></td>
                                <td><?php echo $date; ?></td>
                                <td><?php echo $heure; ?></td>
                                <td><?php echo $id_d; ?></td>
                              </tr>
                              <?php } ?>
                              
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="assets/js/shared/off-canvas.js"></script>
    <script src="assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="assets/js/demo_1/dashboard.js"></script>
    <!-- End custom js for this page-->
    <script src="assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
  </body>

</html>