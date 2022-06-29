<?php
session_start();
 $id=$_GET['id'];


include 'config.php';
$sql="DELETE FROM internet_connection WHERE id={$id}";
$result=mysqli_query($connection, $sql) or die ("error"); 

header("Location: http://localhost/admin/BS3/indexConnection.php");
mysqli_close($connection);
 

?>