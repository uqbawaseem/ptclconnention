<?php
session_start();
 $contact_id=$_GET['id'];


include '../config.php';
$sql="DELETE FROM contact WHERE contact_id={$contact_id}";
$result=mysqli_query($connection, $sql) or die ("error"); 

header("Location: http://localhost/jober/admin/all-message.php");
mysqli_close($connection);
 

?>