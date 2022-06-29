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
  if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($connection, $_POST['id']);
    $pakage_speed = mysqli_real_escape_string($connection, $_POST['pakage_speed']);
    $pakage_fee = mysqli_real_escape_string($connection, $_POST['pakage_fee']);

    if (empty($pakage_fee) || empty($pakage_speed)) {
      if (empty($pakage_speed)) {
        echo "<font color= 'red'>Name field is empty. </font>";
      }
      if (empty($pakage_fee)) {
        echo "<font color= 'red'>Email field is empty. </font>";
      }
    } else {
      //  $result  = mysqli_query($connection, "UPDATE `internet_pakage` SET `pakage_speed`='$pakage_speed',`pakage_fee`='$pakage_fee', WHERE `id`= $id");
      $result  = mysqli_query($connection, "UPDATE `internet_pakage` SET `pakage_speed`='$pakage_speed',`pakage_fee`='$pakage_fee' WHERE `id`= $id");
      if ($result) {
        echo " <div class=\"uk-alert-primary\" uk-alert>
                           <a class=\"uk-alert-close\" uk-close></a>
                           <p>Update successfully! </p>";
  ?>
        <script>
          window.location.href = ('indexPackage.php');
        </script>
  <?php }
    }
  }
  ?>
  <?php
  //getting id from url
  //    $id = $_GET['id'];
  $id = isset($_GET['id']) ? $_GET['id'] : die("error");

  $result = mysqli_query($connection, "SELECT * FROM `internet_pakage` WHERE id =$id");

  while ($p = mysqli_fetch_array($result)) {
    $id = $p['id'];
    $pakage_fee = $p['pakage_fee'];
    $pakage_speed = $p['pakage_speed'];
  }
  ?>
  <form action="" method="post">
    <h2 class="text-center">Edit User</h2>
    <input type="hidden" value="<?php echo $id ?>" name="id">

    <div class="container">
      <div class="row">
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Package Speed</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" value="<?php echo $pakage_speed ?>" name="pakage_speed" id="inputPassword" placeholder="Email">
          </div>
        </div>
        <div class="form-group row ">
          <label for="inputPassword" class="col-sm-2 col-form-label">Package Fee</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="pakage_fee" value="<?php echo $pakage_fee ?>" id="inputPassword" placeholder="Name">
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