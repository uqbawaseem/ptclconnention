<?php
session_start();
 $user_id=$_GET['id'];


include 'config.php';
$sql="DELETE FROM user WHERE id={$user_id}";
$result=mysqli_query($connection, $sql) or die ("error"); 

header("Location: http://localhost/admin/BS3/index.php");
mysqli_close($connection);
 

?>