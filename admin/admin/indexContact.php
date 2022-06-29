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
            <h2 style="font-weight:bold;">ALL Contact</h2>
        </center>

        <div style="padding: 0 16px">
            <div class=" table-responsive">
                <table border="2" id="dtDynamicVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">First NAME</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Message</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = mysqli_query($connection, "SELECT * FROM  contact  ORDER BY `id` DESC");
                        while ($p = mysqli_fetch_array($result)) {
                            echo "<tr><td>" . $p['id'] . "</td>";
                            echo "<td>" . $p['first_name'] . "</td>";
                            echo "<td>" . $p['last_name'] . "</td>";
                            echo "<td>" . $p['email'] . "</td>";
                            echo "<td>" . $p['subject'] . "</td>";
                            echo "<td>" . $p['message'] . "</td>";
                            echo "<td><a href=\"deleteContact.php?id=$p[id]\"  class= \"btn btn-danger\" onClick=\"return confirm('Are you sure you want to delete?')\"><i class=\"fa fa-trash\" style=\"color:red;\"></i></a></td>";
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