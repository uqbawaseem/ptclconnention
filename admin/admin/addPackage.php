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
                    $pakage_speed = mysqli_real_escape_string($connection, $_POST['pakage_speed']);
                    $pakage_fee = mysqli_real_escape_string($connection, $_POST['pakage_fee']);
                    
                    if( empty($pakage_speed) || empty($pakage_fee)){
                        if( empty($pakage_speed) ){
                            echo "<font color= 'red'>pakage_speed field is empty. </font>";
                        }
                        if( empty($pakage_fee) ){
                            echo "<font color= 'red'>pakage_fee field is empty. </font>";
                        }
                        
                    }
                    else
                        {
                            $query = "INSERT INTO `internet_pakage`(`pakage_speed`, `pakage_fee`) VALUES ('$pakage_speed','$pakage_fee')";
                            $result  = mysqli_query($connection, $query);

                            echo "<div class=\"uk-alert-primary\" uk-alert>
                            <a class=\"uk-alert-close\" uk-close></a>
                            <p>Admin added successfully!</p>
                        </div>";
                                                   
                        }

                }
?>
<h2 class="text-center" >Internet Package Form</h2>
<form action="addPackage.php" method="post" style="margin-right:-500px; margin-top:50px;">
    
<div class="container">
    <div class="row">
    <label for="" class="col-sm-2 col-form-label">Pakage Speed</label>
  <div class="form-group row ">
    
    <div class="col-sm-10">
      <input type="text" class="form-control" name="pakage_speed" id="inputPassword" placeholder="Package Speed">
    </div>
  </div>
  <label for=""  class="col-sm-2 col-form-label">Package Fee</label>
  <div class="form-group row">

    <div class="col-sm-10">
      <input type="number" class="form-control" name="pakage_fee" id="inputPassword" placeholder="Package Fee">
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