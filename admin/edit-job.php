<!DOCTYPE html>
<html lang="en">
   <?php 
   session_start();
      include('_head.php');
      ?>
   <body>
      <?php 
         include('_navbar.php');
         ?>
      <?php 
         include('_sidebar.php');
         ?>
      <!-- side bar end -->
      <div class="sb2-2">
         <?php
            //getting id from url
            
            include('../config.php');
            
            // $job_id=$_GET['id'];
            $job_id=isset($_GET['id']) ? $_GET['id'] : die("");
            $result= mysqli_query($connection, "SELECT * FROM job WHERE job_id=$job_id");
            if(isset($_POST['update']))
            {	
            
            	$job_id= mysqli_real_escape_string($connection, $_POST['job_id']);
            	$title= mysqli_real_escape_string($connection, $_POST['title']);
            	$job_type= mysqli_real_escape_string($connection, $_POST['job_type']);
                $description= mysqli_real_escape_string($connection, $_POST['description']);
                $salary= mysqli_real_escape_string($connection, $_POST['salary']);
                $location= mysqli_real_escape_string($connection, $_POST['location']);
                $vacancy= mysqli_real_escape_string($connection, $_POST['vacancy']);
                $category_id= mysqli_real_escape_string($connection, $_POST['category_id']);
                $company_id= mysqli_real_escape_string($connection, $_POST['company_id']);
                $issue_date= mysqli_real_escape_string($connection, $_POST['issue_date']);
                $last_date= mysqli_real_escape_string($connection, $_POST['last_date']);
                
            	
            	
            	// checking empty fields
            	if(empty($title) || empty($job_type)||  empty($description)|| empty($salary)|| empty($location)|| empty($vacancy)|| empty($category_id)|| empty($company_id)|| empty($issue_date)|| empty($last_date) ) {	
            			
            		if(empty($title)) {
            			echo "<font color='red'>Name field is empty.</font><br/>";
            		}
                   
            		if(empty($job_type)) {
            			echo "<font color='red'>Email field is empty.</font><br/>";
            		}
                   
                    if(empty($description)) {
            			echo "<font color='red'>Message field is empty.</font><br/>";
            		}
                    if(empty($salary)) {
            			echo "<font color='red'>Message field is empty.</font><br/>";
            		}
                    if(empty($location)) {
            			echo "<font color='red'>Message field is empty.</font><br/>";
            		}
                    if(empty($vacancy)) {
            			echo "<font color='red'>Message field is empty.</font><br/>";
            		}
                    if(empty($category_id)) {
            			echo "<font color='red'>Message field is empty.</font><br/>";
            		}
                    if(empty($company_id)) {
            			echo "<font color='red'>Message field is empty.</font><br/>";
            		}
            		
                    if(empty($issue_date)) {
            			echo "<font color='red'>Message field is empty.</font><br/>";
            		}
            		
                    if(empty($last_date)) {
            			echo "<font color='red'>Message field is empty.</font><br/>";
            		}
            		
            		
            			
            	} else {	
            		//updating the table
                    // $id=isset($_GET['id']) ? $_GET['id'] : die("");
            		$result = mysqli_query($connection, "UPDATE job SET title='$title',job_type='$job_type',description='$description',salary='$salary'
                    ,location='$location',vacancy='$vacancy',category_id='$category_id',company_id='$company_id',issue_date='$issue_date'
                    ,last_date='$last_date' WHERE job_id=$job_id");
            		
            		//redirectig to the display page. In our case, it is index.php
            		// header("Location:jober/admin/all-jobs.php");
                    echo "<script>window.location.href=('all-jobs.php');</script>";
            	}
            }
            
            //selecting data associated with this particular id
            
            
            while($res = mysqli_fetch_array($result))
            {
            	$job_id=$res['job_id'];
            	$title = $res['title'];
            	$job_type = $res['job_type'];
                $description = $res['description'];
                $salary = $res['salary'];
                $location = $res['location'];
                $vacancy = $res['vacancy'];
                $category_id = $res['category_id'];
                $company_id = $res['company_id'];
                $issue_date = $res['issue_date'];
                $last_date = $res['last_date'];
            	
            }
            ?>
         <!--== BOTTOM FLOAT ICON ==-->
         <form action="" method="post" name="form2">
            <div class="col">
               <div class="form-group">
                  <input type="hidden" name="job_id" value ="<?php echo $job_id;?>">
                  <label for="">JOB TITLE:</label>
                  <input type="text" class="form-control" name="title" placeholder="Title"value="<?php echo $title;?>">
               </div>
            </div>
            <div class="col">
               <div class="form-group">
                  <label for="">JOB Type:</label>
                  <input type="text" class="form-control" name="job_type" placeholder="JOB Type"value="<?php echo $job_type;?>">
               </div>
            </div>
            <div class="col">
               <div class="form-group">
                  <label for="">DESCRIPITION:</label>
                  <input type="text" class="form-control" name="description" placeholder="DESCRIPITION"value="<?php echo $description;?>">
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <div class="form-group">
                     <label for="">SALARY:</label>
                     <input type="number" class="form-control" name="salary" placeholder="SALARY"value="<?php echo $salary;?>">
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="form-group">
                  <label for="">LOCATION:</label>
                  <input type="text" class="form-control" name="location" placeholder="LOCATION"value="<?php echo $location;?>">
               </div>
            </div>
            <div class="col">
               <div class="form-group">
                  <label for="">vacancy:</label>
                  <input type="text" class="form-control"  name="vacancy" placeholder="vacancy"value="<?php echo $vacancy;?>">
               </div>
            </div>
            <div class="col">
               <div class="form-group">
                  <label for="">category_id:</label>
                  <input type="text" class="form-control"  name="category_id" placeholder="category_id"value="<?php echo $category_id;?>">
               </div>
            </div>
            <div class="col">
               <div class="form-group">
                  <label for="">company_id:</label>
                  <input type="text" class="form-control"  name="company_id" placeholder="company_id"value="<?php echo $company_id;?>">
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <label for="">ISSUE DATE:</label>
                  <input type="date" name="issue_date" placeholder="Issue Date"value="<?php echo $issue_date;?>">
               </div>
               <div class="col">
                  <label for="">LAST DATE:</label>
                  <input type="date" name="last_date" placeholder="LAST Date"value="<?php echo $last_date;?>">
               </div>
            </div>
            <div class="form-group">
               <input type="submit" class="form-control" name="update">
            </div>
         </form>
      </div>
      <!--======== SCRIPT FILES =========-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/materialize.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>