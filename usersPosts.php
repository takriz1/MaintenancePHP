<?php include "connexion.php"; 
if(isset($_GET['id'])){
  $id =$_GET['id'];
  $role_val=$_GET['role'];
  if($role_val=="2"){

  $query = "DELETE espace_demandeur FROM users INNER JOIN espace_demandeur ON espace_demandeur.id_user = users.id_u WHERE users.id_u = $id";
  $exec = mysqli_query($conn,$query);
}
if($role_val=="3")
{
  $query = "DELETE espace_technicien FROM users INNER JOIN espace_technicien ON espace_technicien.id_user = users.id_u WHERE users.id_u = $id";
  $exec = mysqli_query($conn,$query);
}

  
  $query_up = "DELETE FROM `users` where id_u=$id ";
  
  $exec = mysqli_query($conn,$query_up);
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
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>Nom </th>
                        <th>Prenom</th>
                        <th>email</th>
                        <th>Matricule</th>
                        <th>Role</th>
                        <th>Add role</th>
                        <th>Add Service</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php


                      // 3- Préaparation de la requete
                      
                      $query = "SELECT * FROM `users`  ";

                      //echo $query;
                      

                      // 4- Exécution de la requete
                      
                      $exec = mysqli_query($conn, $query);
                      while ($array = mysqli_fetch_array($exec)) {

                        $nom = $array['nom'];
                        $prenom = $array['prenom'];
                        $email = $array['email'];
                        $matricule = $array['matricule'];
                        $id_role = $array['id_role'];

                        $id_u = $array['id_u'];
                        $role = "";
                        if ($id_role == 1) {
                          $role = "Admin";
                        } elseif ($id_role == 2) {
                          $role = "Demandeur";

                        } elseif ($id_role == 3) {
                          $role = "Technicien";
                        } elseif ($id_role == 5) {
                          $role = "Chef_Technicien";
                        }






                        ?>
                        <tr>
                          <td>
                            <?php echo $nom; ?>
                          </td>
                          <td>
                            <?php echo $prenom; ?>
                          </td>
                          <td>
                            <?php echo $email; ?>
                          </td>
                          <td>
                            <?php echo $matricule; ?>
                          </td>

                          <td>
                            <?php echo $role; ?>
                          </td>
                          <td>
                            <a href="addRole.php?id=<?php echo $id_u; ?>">

                              <button type="button" class="btn btn-success">Demandeur</button>

                            </a>
                            <a href="addRoleTech.php?id=<?php echo $id_u; ?>">

                              <button type="button" class="btn btn-success">Technicien</button>

                            </a>
                            <a href="addRoleTechchef.php?id=<?php echo $id_u; ?>">

                              <button type="button" class="btn btn-success">Chef_d'Equipe</button>

                            </a>

                          </td>
                          <td>
                            <?php if ($id_role == 3) { ?>
                              <a href="serviceUser.php?id=<?php echo $id_u; ?> ">
                                <button type="button"> update</button>
                              </a>
                              <form action="notificationUser.php?id=<?php echo $id_u; ?>" method="POST">
                                <button onclick="openPrompt<?php echo $id_u; ?>()">Write Message</button>
                                <input type="hidden" id="promptValue<?php echo $id_u; ?>" name="promptValue">
                                <input type="submit" value="Submit">
                              </form>

                            <?php } ?>





                          </td>
                          <td>
                            <a href="UsersEdit.php?id=<?php echo $id_u; ?>">Modifier </a>
                          </td>
                          <td>
                            <a href="?id=<?php echo $id_u; ?>&role=<?php echo $id_role; ?>">Supprimer</a>
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