<!doctype html>
<html lang="en">
<?php 
   session_start();

      
      ?>
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
               if(isset($_POST['update'])) {
                   $id = mysqli_real_escape_string($connection, $_POST['id']);
               
                   $name = mysqli_real_escape_string($connection, $_POST['name']);
                   $email = mysqli_real_escape_string($connection, $_POST['email']);
                   $phone = mysqli_real_escape_string($connection, $_POST['phone']);
                   $address = mysqli_real_escape_string($connection, $_POST['address']);
               
                   if( empty($name) || empty($email) || empty($phone)  || empty($address)){
                       if( empty($name) ){
                           echo "<font color= 'red'>Name field is empty. </font>";
                       }
                       if( empty($email) ){
                           echo "<font color= 'red'>Email field is empty. </font>";
                       }
                       if( empty($phone) ){
                           echo "<font color= 'red'>Password field is empty. </font>";
                       }
                       
                   }
                   else
                   {
                       $result  = mysqli_query($connection, "UPDATE `user` SET `name`='$name',`email`='$email',`phone`='$phone',`address`=`address` WHERE `id`= $id");
                       if ($result) {
                          echo" <div class=\"uk-alert-primary\" uk-alert>
                           <a class=\"uk-alert-close\" uk-close></a>
                           <p>Update successfully! </p>";
                           ?>
            <script>window.location.href=('index.php');</script>
            <?php }
               }
               
               }
               ?>
            <?php
               //getting id from url
               // $id = $_GET['id'];
               $id=isset($_GET['id']) ? $_GET['id'] : die("");
               $result = mysqli_query($connection, "SELECT * FROM `user` WHERE id =$id");
               
               while($p = mysqli_fetch_array($result))
               {
                   $id = $p['id'];
                   $name = $p['name'];
                   $email = $p['email'];
                   $phone = $p['phone'];
                   $address = $p['address'];
               }
               ?>
               
<form action="editUser.php"  method="post">
    <h2 class="text-center">Edit User</h2>
    <input type="hidden" value="<?php echo $id ?>" name="id">

<div class="container">
    <div class="row">
  <div class="form-group row ">
    <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" value="<?php echo $name ?>" id="inputPassword" placeholder="Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword"  class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?php echo $email ?>" name="email" id="inputPassword" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-10">
      <input type="test" class="form-control" value="<?php echo $phone ?>" name="phone" id="inputPassword" placeholder="Phone">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input type="test" class="form-control" value="<?php echo $address ?>" name="address" id="inputPassword" placeholder="Address">
    </div>
  </div>
  <center>
  <button type="submit" class="btn btn-primary" name="update">Submit</button>
  </center>  
</div>
</div>
</form>


</body>
<?php
@include('footer.php');
?>
</html>