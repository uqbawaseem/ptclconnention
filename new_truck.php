<?php
   session_start();
   include('config.php');
     if (isset($_POST['submit'])) {
        $company_name = $_POST['company_name'];
        $name_plate = $_POST['name_plate'];
        $model = $_POST['model'];
        if(empty($_POST['company_name']) || empty($_POST['name_plate']) || empty($_POST['model']))
         {
            if( empty($name) ){
                echo "<font color= 'red'>Company Name field is empty. </font>";
            }
            if( empty($name_plate) ){
                echo "<font color= 'red'>Name_plate field is empty. </font>";
            }
            if( empty($model) ){
                echo "<font color= 'red'>Model field is empty. </font>";
            }
         }
         else
         {
            $query = "INSERT INTO `truck`(`company_name`, `name_plate`, `model`) VALUES ('$company_name','$name_plate','$model')";
            $result  = mysqli_query($connection, $query);
            echo "<font color='red'>Truck Register seccessfully.</font>";
            header("refresh:2;url=index.php");
         }
   
     }
   
   ?>
<!doctype html>
<html class="no-js" lang="en">
   <?php include('_head.php');      
      ?>
   <body>
      <!-- Navigation Start  -->
      <ul style="list-style-type: none; margin: 20px 20px 0px 20px; padding: 5px 2px 5px 10px; overflow: hidden;">
         <li style= "display: inline; float: right; padding: 5px 22px 5px 10px;"><a href="index.php" class="btn btn-primary btn-sm">Back</a></li>
         <li style= "display: inline; float: right; padding: 5px 22px 5px 10px;"><a href="new_truck.php" class="btn btn-primary btn-sm">register your truck</a></li>
         <li style= "display: inline; float: right; padding: 5px 22px 5px 10px;"><a href="new_driver.php" class="btn btn-primary btn-sm">Register as driver</a></li>
      </ul>

      <!-- Navigation End  -->
      <!-- login section start -->
      <section class="login-wrapper">
         <div class="container mt-5">
         <center><h3>Register now</h3>
            <div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
               <form action="new_truck.php" method="post" enctype="multipart/form-data">
                  <input type="text" class="form-control input-lg" placeholder="Company Name" name="company_name"><br>
                  <input type="text" class="form-control input-lg" placeholder="Name Plate" name="name_plate"><br>
                  <input type="text" class="form-control input-lg" placeholder="Model" name="model"><br>
                  <button type="submit" class="btn btn-primary" name="submit">Register</button>
               </form>
            </div></center>
      </section>
      <!-- login section End -->	
   </body>
</html>