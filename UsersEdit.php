<?php include "connexion.php"; ?>
 <?php
$id = $_GET['id'];

// 3- Préaparation de la requete

$query = "SELECT * FROM `users` where id_u=$id ";


// 4- Exécution de la requete

$exec = mysqli_query($conn, $query);
$array = mysqli_fetch_array($exec);

  $nom = $array['nom'];
  $prenom = $array['prenom'];
  $email = $array['email'];
  $matricule = $array['matricule'];

  
if(isset($_POST['submit'])){
      // Recupération des variables
     
      
      $name = addslashes($_POST['name']);
      $lastname = addslashes($_POST['lastname']);
      $mail = addslashes($_POST['mail']);
      $matricule = addslashes($_POST['matricule']);

      $query = "UPDATE `users` SET `nom`='$name',`prenom`='$lastname',`email`='$mail',`matricule`='$matricule' WHERE id_u=$id ";



$exec = mysqli_query($conn,$query);
header('location:usersPosts.php');
}

  ?>
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
                  <h4 class="card-title mb-0">Users</h4>
                  <a href="#"><small>Show All</small></a>
                </div>

                <div class="table-responsive">
                <form class="w-full" action="" method="POST" enctype="multipart/form-data">
                  <div>
                    <label></label>
                    <input name="name" value="<?php echo $nom;?>">
                  </div>
                  <div>
                    <label>Prenom</label>
                    <input name="lastname" value="<?php echo $prenom;?>">
                  </div>
                  <div>
                    <label>Email</label>
                    <input name="mail" value="<?php echo $email;?>">
                  </div>
                  <div>
                    <label>Matricule</label>
                    <input name="matricule" value="<?php echo $matricule;?>">
                  </div>
                  <div>
                  <button class="bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded-full mt-2" type="submit" name="submit">
                                    Valider
                                </button>
</div>
                 
                

                     

                    
        </form>
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
      <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com
        2020</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
          href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a>
        from Bootstrapdash.com</span>
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