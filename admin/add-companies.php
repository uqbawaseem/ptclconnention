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
    <!-- side bar end -->
    <div class="row">
        <div class="col-md-3">
<?php 
            include('_sidebar.php');
?>
        </div>
        <div class="col-md-9" style="margin-top:55px;">
<?php
                
                include_once("../config.php");
                if(isset($_POST['submit'])) {
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
                       
                        
                    }
                    else
                        {
                            $query = "INSERT INTO `company`(`name`, `email`, `password`, `address`, `contact`, `website`, `image`) VALUES ('$name','$email','$password','$address','$contact','$website','$image')";
                            $result  = mysqli_query($connection, $query);

                            echo "<font color='red'>company added seccessfully.</font>";
                            header("Location:all-companies.php");

                        }

                }
?>
            <h3>ADD NEW COMPANY</h3>
            <form class="mt-4" action="add-companies.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                </div>  
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>          
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="Address" name="address">
                </div>
                <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="text" class="form-control" id="contact" placeholder="Contact" name="contact">
                </div>
                <div class="form-group">
                    <label for="contact">Website</label>
                    <input type="text" class="form-control" id="website" placeholder="Website" name="website">
                </div>
                <div class="form-group">
                    <label for="contact">Image</label>
                    
                    <input type="file" class="form-control" id="image" placeholder="Image" name="tasweer">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </div>
    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>