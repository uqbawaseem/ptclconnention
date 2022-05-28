<?php
session_start();
//including the database connectionection file
include("../config.php");

//getting id of the data from url
$jobid= $_GET['id'];


//deleting the row from table
mysqli_query($connection, "SET FOREIGN_KEY_CHECKS=0");
mysqli_query($connection, "DELETE FROM job WHERE job_id=$jobid");
 mysqli_query($connection, "SET FOREIGN_KEY_CHECKS=1");


//redirecting to the display page (index.php in our case)
header("location:all-jobs.php");
?>
