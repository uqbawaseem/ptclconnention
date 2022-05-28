<?php
   session_start();
   include('config.php');
     if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
       $email = $_POST['email'];
       $password = $_POST['password'];
        if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['address']) || empty($_POST['phone']))
         {
            if( empty($name) ){
                echo "<font color= 'red'>Name field is empty. </font>";
            }
            if( empty($email) ){
                echo "<font color= 'red'>Email field is empty. </font>";
            }
            if( empty($password) ){
                echo "<font color= 'red'>Password field is empty. </font>";
            }
            if( empty($address) ){
                echo "<font color= 'red'>Address field is empty. </font>";
            }
            if( empty($phone) ){
                echo "<font color= 'red'>Contact Number field is empty. </font>";
            }
         }
         else
         {
            $query = "INSERT INTO `user`(`name`, `email`, `password`, `address`, `phone`) VALUES ('$name','$email','$password','$address','$phone')";
            $result  = mysqli_query($connection, $query);
            echo "<font color='red'>User Register seccessfully.</font>";
            header("refresh:2;url=userLogin.php");
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
               <form action="userRegister.php" method="post" enctype="multipart/form-data">
                  <input type="text" class="form-control input-lg" placeholder="User Name" name="name"><br>
                  <input type="email" class="form-control input-lg" placeholder="User Email" name="email"><br>
                  <input type="text" class="form-control input-lg" placeholder="contact Number" name="phone"><br>
                  <input type="text" class="form-control input-lg" placeholder="address" name="address"><br>
                  <input type="password" class="form-control input-lg" placeholder="Password" name="password"><br>
                  <button type="submit" class="btn btn-primary" name="submit">Register</button>
               </form>
            </div></center>
      </section>
      <!-- login section End -->	
   </body>
</html>