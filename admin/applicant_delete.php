<?php
session_start();
 $applicant_id=$_GET['id'];


include '../config.php';
$sql="DELETE FROM applicant WHERE applicant_id={$applicant_id}";
$result=mysqli_query($connection, $sql) or die ("error"); 

header("Location: http://localhost/jober/admin/all-applicant.php");
mysqli_close($connection);
 

?>