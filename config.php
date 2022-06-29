<?php
    $Server = 'localhost:3306';
    $UserName = 'root';
    $Password = '';
    $DatabaseName = 'ptcl_connection';

  // creating connection
  $connection = mysqli_connect( $Server, $UserName, $Password, $DatabaseName );  
  // cheching connection 
  if(!$connection){
  }
  echo "";
?>




