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
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo $_SESSION['nom'];?></p>
                  
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            
            
            <li class="nav-item">
              <a class="nav-link" href="ChefTechnique.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Basic UI Elements</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/forms/basic_elements.html">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Form elements</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/charts/chartjs.html">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">Charts</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/tables/basic-table.html">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Tables</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/icons/font-awesome.html">
                <i class="menu-icon typcn typcn-user-outline"></i>
                <span class="menu-title">Icons</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/login.html"> Login </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/register.html"> Register </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
           
            <!-- Page Title Header Ends-->
        
            <div class="">
            <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <h4 class="card-title mb-0">Technicien Information</h4>
                          <a href="#"><small>Show All</small></a>
                        </div>
                        
                        <div class="table-responsive">
                          <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th>Nom & Prénom</th>
                                <th>Matricule</th>
                                <th>Heure</th>
                                <th>Table</th>
                                <th>Description</th>
                                <th>piece1</th>
                                <th>qtt1</th>
                                <th>piece2</th>
                                <th>qtt2</th>
                                <th>piece3</th>
                                <th>qtt3</th>
                                <th>piece4</th>
                                <th>qtt4</th>
                                <th>piece5</th>
                                <th>qtt5</th>
                                <th>piece6</th>
                                <th>qtt6</th>
                                <th>piece7</th>
                                <th>qtt7</th>
                                <th>What</th>
                                <th>Why</th>
                                <th>Where</th>
                                <th>Tech</th>
                                
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
                                        $table 	= $array['table'];
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
                                <td><?php echo $table; ?></td>
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