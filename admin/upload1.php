<?php
include_once("../config.php");

if(isset($_POST['submit'])){
    $image=$_FILES['image'];
    // print_r($image);
    // print_r ($_FILES['image']);

    $image=$_POST['image'];

         $file_name = $_FILES['image']['name'];
         $file_type = $_FILES['image']['type'];
         $file_size = $_FILES['image']['size'];
         $file_tmpname = $_FILES['image']['tmp_name'];


         $filename_explode = explode(".",$file_name);
         $to_lower = strtolower(end($filename_explode));

         $file_array = array ('jpg','jpeg','png');
         if(in_array($to_lower, $file_array)){
         
         $file_destination = 'picture/'.$file_name;
         move_uploaded_file($file_tmpname,$file_destination);
         echo $file_destination;
          $query = "INSERT INTO `uploading_1` ( `image`) VALUE ('$file_destination')"or die("not inserted");
         $result2 = mysqli_query($mysqli,$query);
         echo "file uploaded";
        //  header("location:aboutus-image.php");

        
        
        }else{
            echo "<font color='red'>Extension Not Matched</font><br/>";
        }
}




?>