<!doctype html>
<html lang="en">
    <?php
include('header.php');
include('navbar.php');
include('config.php');
?>
<body>
    <?php
include('sidebar.php');
?>
<?php
                if(isset($_POST['submit'])) {
                    $name = mysqli_real_escape_string($connection, $_POST['name']);
                    $email = mysqli_real_escape_string($connection, $_POST['email']);
                    $password = mysqli_real_escape_string($connection, $_POST['password']);
                    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
                    $address = mysqli_real_escape_string($connection, $_POST['address']);
                    
                    if( empty($name) || empty($email) || empty($password)){
                        if( empty($name) ){
                            echo "<font color= 'red'>Name field is empty. </font>";
                        }
                        if( empty($email) ){
                            echo "<font color= 'red'>Email field is empty. </font>";
                        }
                        if( empty($password) ){
                            echo "<font color= 'red'>Password field is empty. </font>";
                        }
                        if( empty($phone) ){
                          echo "<font color= 'red'>Password field is empty. </font>";
                      }
                      if( empty($address) ){
                        echo "<font color= 'red'>Password field is empty. </font>";
                    }
                        
                    }
                    else
                        {
                            $query = "INSERT INTO `user`(`name`, `email`, `password`, `phone`, `address`) VALUES ('$name','$email','$password','$phone','$address')";
                            $result  = mysqli_query($connection, $query);

                            echo "<div class=\"uk-alert-primary\" uk-alert>
                            <a class=\"uk-alert-close\" uk-close></a>
                            <p>Admin added successfully!</p>
                        </div>";
                                                   
                        }

                }
?>
<form action="addUser.php" method="post">
    <h2 class="text-center">Regiostration Form</h2>
<div class="container">
    <div class="row">
  <div class="form-group row ">
    <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" id="inputPassword" placeholder="Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword"  class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="email" id="inputPassword" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-10">
      <input type="test" class="form-control" name="phone" id="inputPassword" placeholder="Phone">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input type="test" class="form-control" name="address" id="inputPassword" placeholder="Address">
    </div>
  </div>
  <center>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </center>  
</div>
</div>
</form>


</body>
<?php
@include('footer.php');
?>
</html>