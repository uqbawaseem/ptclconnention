<!DOCTYPE html>
<html lang="en">
   <?php 
   session_start();
      include('_head.php');
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
         <?php
            //getting id from url
            
            include('../config.php');
            
            $id=isset($_GET['id']) ? $_GET['id'] : die("");
            $result= mysqli_query($connection, "SELECT * FROM trip WHERE id=$id");
            if(isset($_POST['update']))
            {	
            
            	$id= mysqli_real_escape_string($connection, $_POST['id']);
            	$user_email= mysqli_real_escape_string($connection, $_POST['user_email']);
            	$user_phone= mysqli_real_escape_string($connection, $_POST['user_phone']);
                $destinationAddress= mysqli_real_escape_string($connection, $_POST['destinationAddress']);
                $originAddress= mysqli_real_escape_string($connection, $_POST['originAddress']);
                $distance_covered= mysqli_real_escape_string($connection, $_POST['distance_covered']);
                $driver_id= mysqli_real_escape_string($connection, $_POST['driver_id']);
                $truck_id= mysqli_real_escape_string($connection, $_POST['truck_id']);
                $bill= mysqli_real_escape_string($connection, $_POST['bill']);
                $fuel_expense= mysqli_real_escape_string($connection, $_POST['fuel_expense']);
                $driver_expense= mysqli_real_escape_string($connection, $_POST['driver_expense']);
                $total_bill= mysqli_real_escape_string($connection, $_POST['total_bill']);
                $bill_status= mysqli_real_escape_string($connection, $_POST['bill_status']);
                
            	
            	
            	// checking empty fields
            	if(empty($user_email) || empty($user_phone)||  empty($destinationAddress)|| empty($originAddress)|| empty($distance_covered)|| empty($driver_id)|| empty($truck_id)|| empty($bill)|| empty($bill_status) ) {	
            			
            		if(empty($user_email)) {
            			echo "<font color='red'>Name field is empty.</font><br/>";
            		}
                   
            		if(empty($user_phone)) {
            			echo "<font color='red'>Phone field is empty.</font><br/>";
            		}
                   
                    if(empty($destinationAddress)) {
            			echo "<font color='red'>Destination Address field is empty.</font><br/>";
            		}
                    if(empty($originAddress)) {
            			echo "<font color='red'>Origin Address field is empty.</font><br/>";
            		}
                    if(empty($distance_covered)) {
            			echo "<font color='red'>Distance covered field is empty.</font><br/>";
            		}
                    if(empty($driver_id)) {
            			echo "<font color='red'>driver field is empty.</font><br/>";
            		}
                    if(empty($truck_id)) {
            			echo "<font color='red'>truck field is empty.</font><br/>";
            		}
                    if(empty($bill)) {
            			echo "<font color='red'>Bill field is empty.</font><br/>";
            		}
                    if(empty($bill_status)) {
            			echo "<font color='red'>Bill status field is empty.</font><br/>";
            		}
            		
            		
            			
            	} else {	
            		//updating the table
                    // $id=isset($_GET['id']) ? $_GET['id'] : die("");
                    $total_bill = $fuel_expense + $driver_expense + $bill;
            		$result = mysqli_query($connection, "UPDATE trip SET user_email='$user_email',user_phone='$user_phone',destinationAddress='$destinationAddress',originAddress='$originAddress'
                    ,distance_covered='$distance_covered',driver_id='$driver_id',truck_id='$truck_id',bill='$bill',total_bill='$total_bill',fuel_expense='$fuel_expense',driver_expense='$driver_expense'
                    ,bill_status='$bill_status' WHERE id=$id");
            		
                    echo "<script>window.location.href=('all_trips.php');</script>";
            	}
            }
            
            
            
            while($res = mysqli_fetch_array($result))
            {
            	$id=$res['id'];
            	$user_email = $res['user_email'];
            	$user_phone = $res['user_phone'];
                $destinationAddress = $res['destinationAddress'];
                $originAddress = $res['originAddress'];
                $distance_covered = $res['distance_covered'];
                $driver_id = $res['driver_id'];
                $truck_id = $res['truck_id'];
                $bill = $res['bill'];
                $bill_status = $res['bill_status'];
            	
            }
            ?>
         <!--== BOTTOM FLOAT ICON ==-->
         <form action="" method="post" name="form2">
            <div class="col">
               <div class="form-group">
                  <input type="hidden" name="id" value ="<?php echo $id;?>">
                  <label for="">User Email:</label>
                  <input type="email" class="form-control" name="user_email" placeholder="user_email"value="<?php echo $user_email;?>">
               </div>
            </div>
            <div class="col">
               <div class="form-group">
                  <label for="">User Phone:</label>
                  <input type="text" class="form-control" name="user_phone" placeholder="JOB Type"value="<?php echo $user_phone;?>">
               </div>
            </div>
            <div class="col">
               <div class="form-group">
                  <label for="">Destination Address:</label>
                  <input type="text" class="form-control" name="destinationAddress" placeholder="Destination Address"value="<?php echo $destinationAddress;?>">
               </div>
            </div>
            <div class="col">
               <div class="form-group">
                  <label for="">Origin Address:</label>
                  <input type="text" class="form-control" name="originAddress" placeholder="Origin Address"value="<?php echo $originAddress;?>">
               </div>
            </div>
            <div class="col">
               <div class="form-group">
                  <label for="">Distance Covered:</label>
                  <input type="text" class="form-control"  name="distance_covered" placeholder="Distance Covered"value="<?php echo $distance_covered;?>">
               </div>
            </div>
            <div class="col">
               <div class="form-group">
                  <label for="">Driver:</label>
                  <input type="text" class="form-control"  name="driver_id" placeholder="driver_id"value="<?php echo $driver_id;?>">
               </div>
            </div>
            <div class="col">
               <div class="form-group">
                  <label for="">Truck:</label>
                  <input type="text" class="form-control"  name="truck_id" placeholder="truck_id"value="<?php echo $truck_id;?>">
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <label for="">driver Expense:</label>
                  <input type="number" name="fuel_expense" placeholder="Fuel Expense"value="<?php echo $fuel_expense;?>">
               </div>
               <div class="col">
                  <label for="">Driver Expense:</label>
                  <input type="number" name="driver_expense" placeholder="Driver Expense"value="<?php echo $driver_expense;?>">
               </div>
               <div class="col">
                  <label for="">Bill:</label>
                  <input type="number" name="bill" placeholder="Bill"value="<?php echo $bill;?>">
               </div>
            </div>
            <div class="col">
                  <label for="">Total Bill:</label>
                  <input type="number" name="total_bill" placeholder="Total Bill"value="<?php echo $total_bill;?>">
               </div>
            <div class="col">
                  <label for="">Bill Status:</label>
                  <input type="text" name="bill_status" placeholder="Bill Status"value="<?php echo $bill_status;?>">
               </div>
            <div class="form-group">
               <input type="submit" class="form-control" name="update">
            </div>
         </form>
      </div>
      <!--======== SCRIPT FILES =========-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/materialize.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>