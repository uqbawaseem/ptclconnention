<!DOCTYPE html>
<html lang="en">
   <?php 
   session_start();
      include_once('_head.php');
      ?>
   <body>
      <?php 
         include_once('_navbar.php');
         ?>
      <!-- side bar end -->
      <div class="row">
         <div class="col-md-3">
            <?php 
               include('_sidebar.php');
               ?>
         </div>
         <div class="col-md-9" style="margin-top:55px;">
            <?php
               include("../config.php");
               if(isset($_POST['update'])) {
                   //$id = isset($_POST['company_id']) ? strip_tags($_POST['company_id']): ' ';
                   $id = mysqli_real_escape_string($connection, $_POST['company_id']);
                   $name = mysqli_real_escape_string($connection, $_POST['name']);
                   $email = mysqli_real_escape_string($connection, $_POST['email']);
                   $password = mysqli_real_escape_string($connection, $_POST['password']);
                   $contact = mysqli_real_escape_string($connection, $_POST['contact']);
                   $website = mysqli_real_escape_string($connection, $_POST['website']);
                   $address = mysqli_real_escape_string($connection, $_POST['address']);
                   $image = $_FILES["tasweer"]["name"];
                   $path="../images/".$image;
                   move_uploaded_file($_FILES["tasweer"]["name"],$path);
                   if( empty($name) || empty($email) || empty($password) || empty($contact) || empty($website)){
                       if( empty($name) ){
                           echo "<font color= 'red'>Name field is empty. </font>";
                       }
                       if( empty($email) ){
                           echo "<font color= 'red'>Email field is empty. </font>";
                       }
                       if( empty($password) ){
                           echo "<font color= 'red'>Password field is empty. </font>";
                       }
                       if( empty($contact) ){
                           echo "<font color= 'red'>Contact field is empty. </font>";
                       }
                       if( empty($website) ){
                           echo "<font color= 'red'>Website field is empty. </font>";
                       }
                       if( empty($address) ){
                           echo "<font color= 'red'>Address field is empty. </font>";
                       }
                       // if( empty($image) ){
                       //     echo "<font color= 'red'>Image field is empty. </font>";
                       // }
                       
                   }
                   else
                   {
                       $result  = mysqli_query($connection, "UPDATE `company` SET `name`='$name',`email`='$email',`password`='$password',`address`='$address',`contact`='$contact',`website`='$website',`image`='$image' WHERE `company_id`= $id");
                       if ($result) {?>
            <script>window.location.href=('all-companies.php');</script>
            <?php }
               }
               
               }
               ?>
            <?php
               //getting id from url
               // $id = $_GET['id'];
               $id=isset($_GET['id']) ? $_GET['id'] : die("");
               $result = mysqli_query($connection, "SELECT * FROM `company` WHERE company_id =$id");
               
               while($p = mysqli_fetch_array($result))
               {
                   $id = $p['company_id'];
                   $name = $p['name'];
                   $email = $p['email'];
                   $password = $p['password'];
                   $address = $p['address'];                
                   $contact = $p['contact'];
                   $website = $p['website'];                
                   $image = $p['image'];
               }
               ?>
            <h3>EDIT NEW COMPANY</h3>
            <form action="edit-company.php" method="POST" class="mt-4" enctype="multipart/form-data">
               <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $name?>" name="name">
                  <input type="hidden" name= "company_id" value="<?php echo $id;?>">
               </div>
               <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $email?>" name="email">
               </div>
               <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" value="<?php echo $password?>" name="password">
               </div>
               <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" id="address" value="<?php echo $address?>" name="address">
               </div>
               <div class="form-group">
                  <label for="contact">Contact</label>
                  <input type="text" class="form-control" id="contact" value="<?php echo $contact?>" name="contact">
               </div>
               <div class="form-group">
                  <label for="contact">Website</label>
                  <input type="text" class="form-control" id="website" value="<?php echo $website?>" name="website">
               </div>
               <div class="form-group">
                  <label for="contact">Image</label>
                  <input type="file" class="form-control" id="image" value="<?php echo $image?>" name="image">
                  <img class="form-control" id="image" style="height:200px; width:200px;" src="../img/<?php echo $image?>" name="image">
               </div>
               <button type="submit" class="btn btn-primary" name="update" onclick="history.back();">Update</button>
            </form>
         </div>
      </div>
      <!--======== SCRIPT FILES =========-->
      <script src="js/jquery.min.js"></>
         <script src="js/bootstrap.min.js">
      </script>
      <script src="js/materialize.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>