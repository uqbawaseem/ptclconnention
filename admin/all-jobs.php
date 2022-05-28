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

    <!--== BOTTOM FLOAT ICON ==-->
    <div class="sb2-2">
    <table  id="dtDynamicVerticalScrollExample"
     class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                     <thead>
                        <tr>
                           <th scope="col">ID</th>
                           <th scope="col">TITLE</th>
                           <th scope="col">Job Type</th>
                           <th scope="col">DESCRIPTION</th>
                           <th scope="col">SALARY</th>
                           <th scope="col">Location</th>
                           <th scope="col">vacancy</th>
                           <th scope="col">CATEGORY ID </th>
                           <th scope="col">COMPANY ID</th>
                           <th scope="col">ISSUE DATE</th>
                           <th scope="col">LAST DATE</th>
                           <th scope="col">ACTION</th>
                        </tr>
                     </thead>
                     <tbody>
                     <?php 
                     $query="SELECT job.job_id,job.title,job.job_type,job.description,job.salary,job.location,
                     job.vacancy,job.category_id,job.company_id,job.issue_date,job.last_date, 
                     company.company_id FROM job,company,category WHERE job.company_id=company.company_id AND job.category_id=category.category_id";
                     $result=mysqli_query($connection,$query) or die(mysqli_error($connection));
                           while($Job = mysqli_fetch_array($result)){
                              echo "<tr><td>".$Job['job_id']."</td>";
                              echo "<td>".$Job['title']."</td>";
                              echo "<td>".$Job['job_type']."</td>";
                              echo "<td>".$Job['description']."</td>";
                              echo "<td>".$Job['salary']."</td>";
                              echo "<td>".$Job['location']."</td>";
                              echo "<td>".$Job['vacancy']."</td>";
                              echo "<td>".$Job['category_id']."</td>";
                              echo "<td>".$Job['company_id']."</td>";
                              echo "<td>".$Job['issue_date']."</td>";
                              echo "<td>".$Job['last_date']."</td>";
                              
                              echo "<td><a href=\"edit-job.php?id=$Job[job_id]\" class= \"btn btn-secondary\"><i class=\"fa fa-edit\"></i></a><br><br>
                               <a href=\"delete-job.php?id=$Job[job_id]\"  class= \"btn btn-danger\" onClick=\"return confirm('Are you sure you want to delete?')\"><i class=\"fa fa-trash\" style=\"color:red;\"></i></a></td>";		         
                                 }
                           ?>
                     </tbody>
                  </table>
                                </div>

    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>