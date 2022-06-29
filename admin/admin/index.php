<!doctype html>
<html lang="en">
    <?php
include('header.php');
include('navbar.php');
include('config.php');
?>
<body>
<?php 

?>

        <?php 
        include('sidebar.php');
        ?>
        <!-- side bar end -->
        <!--== BOTTOM FLOAT ICON ==-->
       <div class="content_center">
        <center><h2 style="font-weight:bold;">ALL User</h2></center>
        <div class="container">
        <div style="padding: 0 16px">
            <div class=" table-responsive">
        <table border="2" id="dtDynamicVerticalScrollExample" class="table table-striped table-bordered" cellspacing="0">
                        <thead class="bg-dark text-light">
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NAME</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                            <th scope="col">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                         $result = mysqli_query($connection, "SELECT * FROM  user  ORDER BY `id` DESC");
                            while($p = mysqli_fetch_array($result)){
                                echo "<tr><td>".$p['id']."</td>";
                                echo "<td>".$p['name']."</td>";
                                echo "<td>".$p['email']."</td>";
                                echo "<td>".$p['phone']."</td>";
                                echo "<td>".$p['address']."</td>";
                                echo "<td><a href=\"editUser.php?id=$p[id]\" class= \"btn btn-secondary\"><i class=\"fa fa-edit\"></i></a> <br><br> <a href=\"deleteUser.php?id=$p[id]\"  class= \"btn btn-danger\" onClick=\"return confirm('Are you sure you want to delete?')\"><i class=\"fa fa-trash\" style=\"color:red;\"></i></a></td>";		         
                             }
                            ?>
                        </tbody>
        </table>
        </div>
        </div>
                            </div>
                            </div>
<?php
@include('footer.php');
?>
</html>