<!DOCTYPE html>
<html lang="en">
   <?php 
   session_start();

      include('_head.php');
      ?>
   <?php
      include_once("../config.php");
      
      $query="SELECT * FROM trip";
      $result = mysqli_query($connection,$query);
      ?>
   <body>
      <?php 
         include('_navbar.php');
         ?>
      <?php 
         include('_sidebar.php');
         ?>
      <!-- side bar end -->
      <div class="sb2-2">
         <table  id="dtDynamicVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%" >
            <thead class="bg-dark text-light">
               <tr >
                  <td>ID</td>
                  <td>Email</td>
                  <td>Phone</td>
                  <td>Origin Address</td>
                  <td>Destination Address</td>
                  <td>Bill</td>
                  <td>Total Amount</td>
                  <td>Bill Status</td>
                  <td>Action</td>
               </tr>
            </thead>
            <?php 
               $result = mysqli_query($connection, "SELECT * FROM trip ORDER BY `id` DESC");
                  while($p = mysqli_fetch_array($result)){
                      echo "<tr><td>".$p['id']."</td>";
                      echo "<td>".$p['user_email']."</td>";
                      echo "<td>".$p['user_phone']."</td>";
                      echo "<td>".$p['originAddress']."</td>";
                      echo "<td>".$p['destinationAddress']."</td>";
                      echo "<td>".$p['bill']."</td>";
                      echo "<td>".$p['total_bill']."</td>";
                      echo "<td>".$p['bill_status']."</td>";
                      echo "<td><a href=\"edit_trip.php?id=$p[id]\" class= \"btn btn-secondary\">Edit</a>
                                  <br><br> 
                                 <a href=\"delete_trip.php?id=$p[id]\"  class= \"btn btn-danger\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a><br><br>".
                                    $trip_id = $p['id'];
                                    $q="SELECT * FROM report where trip_id= $trip_id";
                                    $trip = mysqli_query($connection,$q);
                                    if($trip){
                                       "<a href=\"report.php?id=$p[id]\" class= \"btn btn-info\">Print Report</a></td>";		         
                                    }
                                    else{
                                       "<a href=\"report.php?id=$p[id]\" class= \"btn btn-info\">Generate Report</a></td>";		         
                                    }
                   }
                  ?>
            </td>
            </tr>
         </table> 
      </div>
      <!--======== SCRIPT FILES =========-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/materialize.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>