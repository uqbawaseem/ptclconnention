<?php
   session_start();
   include('config.php');
   if (!isset($_SESSION['email'])){
      echo "<script>window.alert(\"Please Login First\");</script>";
      header("location:userLogin.php");
     }
   ?>
<!doctype html>
<html class="no-js" lang="en">	
<?php include('_head.php'); 
      ?>
   <body>
    <?php
         include_once("config.php");
         if(isset($_POST['submit'])) {
            $user_id = mysqli_real_escape_string($connection, $_POST['user_id']);
            $user_name = mysqli_real_escape_string($connection, $_POST['user_name']);
            $user_phone = mysqli_real_escape_string($connection, $_POST['user_phone']);
            $user_email = mysqli_real_escape_string($connection, $_POST['user_email']);
            $user_address = mysqli_real_escape_string($connection, $_POST['user_address']);
            $pakage_speed = mysqli_real_escape_string($connection, $_POST['pakage_speed']);
            $issue_date = mysqli_real_escape_string($connection, $_POST['issue_date']);
            $connection_fee = mysqli_real_escape_string($connection, $_POST['connection_fee']);
            $status = mysqli_real_escape_string($connection, $_POST['status']);
            if( empty($user_name) || empty($user_email) || empty($user_phone) || empty($user_id) || empty($user_address) || empty($pakage_speed) ||
            empty($issue_date) || empty($connection_fee) || empty($status)){
               if( empty($user_name) ){
                     echo "<font color= 'red'>Name field is empty. </font>";
               }
               if( empty($user_email) ){
                     echo "<font color= 'red'>Email field is empty. </font>";
               }
               if( empty($user_phone) ){
                     echo "<font color= 'red'>Phone field is empty. </font>";
               }
               if( empty($user_id) ){
                     echo "<font color= 'red'>id field is empty. </font>";
               }
               if( empty($user_address) ){
                     echo "<font color= 'red'>Address Address field is empty. </font>";
               }
               if( empty($pakage_speed) ){
                     echo "<font color= 'red'>pakage_speed field is empty. </font>";
               }
               if( empty($issue_date) ){
                  echo "<font color= 'red'>Date field is empty. </font>";
            }
               if( empty($connection_fee) ){
                     echo "<font color= 'red'>connection fee field is empty. </font>";
               }
               if( empty($status) ){
                  echo "<font color= 'red'>Status field is empty. </font>";
            }
            }
            else{
                     mysqli_query($connection, "SET FOREIGN_KEY_CHECKS=0");
                     $total_bill = $bill+$fuel_expense+$driver_expense;
                     $pakage=mysqli_query($connection,"SELECT pakage_fee FROM internet_pakage WHERE pakage_speed = '$pakage_speed'") or die(mysqli_error());
                     while($p=mysqli_fetch_array($pakage)){
                     $pakage_fee = $p['pakage_fee'];
                     $query = "INSERT INTO `internet_connection`(`user_name`, `user_phone`, `user_email`, `user_address`, `pakage_speed`, `pakage_fee`, `connection_fee`, `issue_date`, `status`) VALUES ('$user_name','$user_phone','$user_email','$user_address','$pakage_speed','$pakage_fee','$connection_fee','$issue_date','$status')";
                     $result  = mysqli_query($connection, $query) or die ("ERROR");
                  
                     mysqli_query($connection, "SET FOREIGN_KEY_CHECKS=1");
                     mysqli_close($connection);
                     header('location:index.php');
                     echo "<div class=\"uk-alert-primary\" uk-alert>
                     <a class=\"uk-alert-close\" uk-close></a>
                     <p>Trip Book successfully!</p>
                        </div>";
               }}

         }
?>
      <?php  
          if ($_SESSION['email']){
            $session_email = $_SESSION['email'];
            $query = "SELECT * from `user` WHERE email ='$session_email'";
            $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
            while($a = mysqli_fetch_array($result)){
      ?> 
      <div class="container mt-5">
         <h3 style="text-align: center;"> BOOK A TRUCK</h3>
         <form action="new_internet_connection.php" method="POST" name="form2" enctype="multipart/form-data">
            <div class="col mt-3">
               <input type="hidden" name="user_id" class="form-control input-lg" value="<?php echo $a['id'];?>">
               <input type="hidden" name="connection_fee" class="form-control input-lg" value="2000">
               <input type="hidden" name="status" class="form-control input-lg" value="pending">
               <input type="text" class="form-control" name="user_name" placeholder="User Name" value="<?php echo $a['name'];?>">
            </div><br>
            <div class="col">
               <div class="form-group">
                  <input type="email" class="form-control" name="user_email" placeholder="Email" value="<?php echo $a['email'];?>">
               </div>
            </div>
            <div class="col">
               <div class="form-group">
                  <input type="text" class="form-control" name="user_phone" placeholder="Phone Number" value="<?php echo $a['phone'];?>">
               </div>
            </div>
            <div class="col">
               <div class="form-group">
                  <input type="text" class="form-control" name="user_address" placeholder="Address" value="<?php echo $a['address'];?>">
               </div>
            </div>
            <?php }} ?>
            <div class="col">
               <select  id="pakage_speed" name="pakage_speed" class="form-group" required onchange="myFunction()">
                  <option value="">Pakage Speed</option>
                  <?php
                     include("config.php");
                     $query=mysqli_query($connection,"SELECT pakage_speed, pakage_fee FROM internet_pakage ORDER BY pakage_fee ASC") or die(mysqli_error());
                     while($c=mysqli_fetch_array($query)){
                     ?>
                  <option class="form-control" value="<?php echo $c['pakage_speed'];?>"><?php echo $c['pakage_speed'];?></option>
                  <?php } ?>
               </select>
            </div>
            <div class="col">
               <div class="form-group">
                  <input type="hidden" class="form-control" name="issue_date" placeholder="Issue date" value="<?php echo date("Y/m/d");?>">
               </div>
            </div>
            <div class="form-group">
               <center><button type="submit" class="btn btn-primary" name="submit">Submit</button></center>
            </div>
         </form>
      </div>

       </body>