<?php
session_start();
 $contact_id=$_GET['id'];


include 'config.php';
$sql="DELETE FROM contact WHERE id={$contact_id}";
$result=mysqli_query($connection, $sql) or die ("error"); 

header("Location: http://localhost/admin/BS3/indexContact.php");
mysqli_close($connection);
 

?>