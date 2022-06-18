<?php
   session_start();
       include("../config.php");
      
   ?>
<!DOCTYPE html>
<html lang="en">
   <?php 
      include('_head.php');
      ?>
   <body>
      <?php 
         include('_navbar.php');
         ?>
      <div class="row">
         <div class="col-md-3">
            <?php 
               include('_sidebar.php');
               ?>
            <!-- side bar end -->
         </div>
         <div class="col-md-9" style="margin-top: 160px;">
            <div class="uk-alert-primary" uk-alert>
               <a class="uk-alert-close" uk-close></a>
               <p>Login successfully! </p>
            </div>
            <a href="add-admin.php">
            <button type="button" class="btn btn-dark float-right mr-5 mb-4">
            ADD NEW ADMIN
            </button> 
            </a>
            <table id="dtDynamicVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
               <thead class="bg-dark text-light">
                  <tr>
                     <th scope="col">ID</th>
                     <th scope="col">NAME</th>
                     <th scope="col">Email</th>
                     <th scope="col">PASSOWRD</th>
                     <th scope="col">ACTIONS</th>
                  </tr>
               </thead>
               <tbody>
                  <?php 
                     $result = mysqli_query($connection, "SELECT * FROM admin ORDER BY `id` DESC");
                     
                        while($p = mysqli_fetch_array($result)){
                            echo "<tr><td>".$p['id']."</td>";
                            echo "<td>".$p['name']."</td>";
                            echo "<td>".$p['email']."</td>";
                            echo "<td>".$p['password']."</td>";
                            echo "<td><a href=\"edit-admin.php?id=$p[id]\" class= \"btn btn-secondary\">Edit</a> <br><br> <a href=\"admin-delete.php?id=$p[id]\"  class= \"btn btn-danger\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		         
                         }
                        ?>
               </tbody>
            </table>
         </div>
      </div>
      <!--======== SCRIPT FILES =========-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/materialize.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>