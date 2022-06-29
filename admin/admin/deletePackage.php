<?php
session_start();
 $package_id=$_GET['id'];


include 'config.php';
$sql="DELETE FROM internet_pakage WHERE id={$package_id}";
$result=mysqli_query($connection, $sql) or die ("error"); 

header("Location: http://localhost/admin/BS3/indexPackage.php");
mysqli_close($connection);
 

?>