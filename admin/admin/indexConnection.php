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
        <center>
            <h2 style="font-weight:bold;">ALL Connection</h2>
        </center>
        <div style="padding: 0 16px">
            <div class=" table-responsive">
                <table border="2" id="dtDynamicVerticalScrollExample" class="table table-striped table-bordered " cellspacing="0">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">User Name</th>
                            <th scope="col">User Phone</th>
                            <th scope="col">User Email</th>
                            <th scope="col">User Address</th>
                            <th scope="col">Package Speed</th>
                            <th scope="col">Package Fee</th>
                            <th scope="col">Issue Date</th>
                            <th scope="col">Connection Fee</th>
                            <th scope="col">Status</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = mysqli_query($connection, "SELECT * FROM  internet_connection  ORDER BY `id` DESC");
                        while ($p = mysqli_fetch_array($result)) {
                            echo "<tr><td>" . $p['id'] . "</td>";
                            echo "<td>" . $p['user_name'] . "</td>";
                            echo "<td>" . $p['user_phone'] . "</td>";
                            echo "<td>" . $p['user_email'] . "</td>";
                            echo "<td>" . $p['user_address'] . "</td>";
                            echo "<td>" . $p['pakage_speed'] . "</td>";
                            echo "<td>" . $p['pakage_fee'] . "</td>";

                            echo "<td>" . $p['issue_date'] . "</td>";
                            echo "<td>" . $p['connection_fee'] . "</td>";
                            echo "<td>" . $p['status'] . "</td>";
                            echo "<td>
                            <a href=\"report.php?id=$p[id]\" class= \"btn btn-secondary\"><i class=\"fa fa-file\"></i></a> <br><br>
                            <a href=\"editConnection.php?id=$p[id]\" class= \"btn btn-secondary\"><i class=\"fa fa-edit\"></i></a> <br><br> <a href=\"deleteConnection.php?id=$p[id]\"  class= \"btn btn-danger\" onClick=\"return confirm('Are you sure you want to delete?')\"><i class=\"fa fa-trash\" style=\"color:red;\"></i></a></td>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
    @include('footer.php');
    ?>

</html>