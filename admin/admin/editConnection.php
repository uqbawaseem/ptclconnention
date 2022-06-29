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
        $status = mysqli_real_escape_string($connection, $_POST['status']);

        if (empty($status)) {
            if (empty($pakage_speed)) {
                echo "<font color= 'red'>Staus field is empty. </font>";
            }
        } else {
            $result  = mysqli_query($connection, "UPDATE `internet_connection` SET `status`='$status' WHERE `id`= $id");
            if ($result) {
                echo " <div class=\"uk-alert-primary\" uk-alert>
                           <a class=\"uk-alert-close\" uk-close></a>
                           <p>Update successfully! </p>";
    ?>
                <script>
                    window.location.href = ('indexConnection.php');
                </script>
    <?php
            }
        }
    }
    ?>
    <?php
    //getting id from url
    //    $id = $_GET['id'];
    $id = isset($_GET['id']) ? $_GET['id'] : die("ssssss");

    $result = mysqli_query($connection, "SELECT * FROM `internet_connection` WHERE id =$id");

    while ($p = mysqli_fetch_array($result)) {
        $id = $p['id'];
        $status = $p['status'];
    }
    ?>





    <form action="editConnection.php" method="post">
        <h2 class="text-center">Edit Connection Status</h2>
        <input type="hidden" value="<?php echo $id ?>" name="id">

        <div class="container">
            <div class="row">
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Package Speed</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="status" id="">
                            <option value="Accect">Accept</option>
                            <option value="Reject">Reject</option>
                        </select>
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