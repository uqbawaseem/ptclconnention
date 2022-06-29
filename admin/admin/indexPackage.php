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
    <center>
        <h2 style="font-weight:bold;">ALL Package</h2>
    </center>
    <div class="content_center">
        <div style="padding: 0 16px">
            <div class=" table-responsive">

                <table border="2" id="dtDynamicVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Package Speed</th>
                            <th scope="col">Package Fee</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = mysqli_query($connection, "SELECT * FROM  internet_pakage  ORDER BY `id` DESC");
                        while ($p = mysqli_fetch_array($result)) {
                            echo "<tr><td>" . $p['id'] . "</td>";
                            echo "<td>" . $p['pakage_speed'] . "</td>";
                            echo "<td>" . $p['pakage_fee'] . "</td>";
                            echo "<td><a href=\"editPackage.php?id=$p[id]\" class= \"btn btn-secondary\"><i class=\"fa fa-edit\"></i></a> <br><br> <a href=\"deletePackage.php?id=$p[id]\"  class= \"btn btn-danger\" onClick=\"return confirm('Are you sure you want to delete?')\"><i class=\"fa fa-trash\" style=\"color:red;\"></i></a></td>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>

        <?php
        @include('footer.php');
        ?>

</html>