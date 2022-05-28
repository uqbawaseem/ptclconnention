<?php
   session_start();
   include('config.php');
   
     if (isset($_POST['submit'])) {
       $email = $_POST['email'];
       $password = $_POST['password'];
        if(empty($_POST['email']) || empty($_POST['password']))
         {
           echo "
           <script>alert('Please fill all fields')</script>
                 ";
         }
         else
         {
           $search = "SELECT * FROM `user` WHERE `email`= '$email' and `password`= '$password' ";
           $result = mysqli_query($connection, $search);
           if (mysqli_fetch_assoc($result))
           {
             $_SESSION['email'] = $_POST['email'];
             header('location:index.php');
           }
           else{
             echo "
             <div class=\"uk-alert-danger\" uk-alert>
             <a class=\"uk-alert-close\" uk-close></a>
             <p>Please enter correct email and password. </p>
         </div>";
           }
         }
   
     }
   
   ?>
<!doctype html>
<html class="no-js" lang="en">
   <?php include('_head.php');      
      ?>
   <body>
      <!-- login section start -->
      <section class="login-wrapper">
         <div class="container mt-5">
         <center><h3>Login</h3>
            <div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
               <form action="userLogin.php" method="post" enctype="multipart/form-data">
                  <input type="email" class="form-control input-lg" placeholder="User Email" name="email"><br>
                  <input type="password" class="form-control input-lg" placeholder="Password" name="password"><br>
                  <button type="submit" class="btn btn-primary" name="submit">Login</button>
                  <p>Have't Any Account <a href="UserRegister.php">Create An Account</a></p>
               </form>
            </div></center>
      </section>
      <!-- login section End -->	
   </body>
</html>