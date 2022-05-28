<?php
session_start();
    include("../config.php");

    $id = $_GET['id'];
    $job_id = $_GET['job_id'];
    mysqli_query($connection, "SET FOREIGN_KEY_CHECKS=0");
    mysqli_query($connection, "DELETE FROM `company` WHERE `company_id`=$id");
    mysqli_query($connection, "SET FOREIGN_KEY_CHECKS=1");
    header("location: all-companies.php");

?>