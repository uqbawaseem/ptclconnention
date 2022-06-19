<?php 
   session_start();
   include('config.php');?>
<!DOCTYPE html>
<html lang="en">
  <!-- head -->
  <?php include('_head.php');?>
  <body>
  <div class="site-wrap">
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <!-- Nav bar -->
    <?php include('_navbar.php');?>
  

    <div class="site-blocks-cover overlay" style="background-image: url(images/internet.png);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light mb-5 text-uppercase font-weight-bold">PtclConnection Services</h1>
            <p><a href="new_internet_connection.php" class="btn btn-primary py-3 px-5 text-white">New Internet Connection</a></p>

          </div>
        </div>
      </div>
    </div>  

    <div class="container">
      <div class="row align-items-center no-gutters align-items-stretch overlap-section">
        <div class="col-md-4">
          <div class="feature-1 pricing h-100 text-center">
            <div class="icon">
              <span class="icon-dollar"></span>
            </div>
            <h2 class="my-4 heading">Total Connections</h2>
            <h3>
              <?php 
                  $query = "SELECT * FROM internet_connection";
                  $result=mysqli_query($connection, $query); 
                  echo mysqli_num_rows($result);
               ?>
            </h3>
          </div>
        </div>
        <div class="col-md-4">
          <div class="bg-dark feature-3 pricing h-100 text-center">
            <div class="icon">
              <span class="icon-phone"></span>
            </div>
            <h2 class="my-4 heading  text-center">Available pakages</h2>
            <h3>
              <?php 
                  $query = "SELECT * FROM internet_pakage";
                  $result=mysqli_query($connection, $query); 
                  echo mysqli_num_rows($result);
               ?>
            </h3>     
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-3 pricing h-100 text-center">
            <div class="icon">
              <span class="icon-phone"></span>
            </div>
            <h2 class="my-4 heading">Total Customers</h2>
            <h3>
              <?php 
                  $query = "SELECT * FROM user";
                  $result=mysqli_query($connection, $query); 
                  echo mysqli_num_rows($result);
               ?>
            </h3>
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section bg-light" id= "connection">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Your Active Connections</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
        <?php   
        if(isset($_SESSION['email'])){
        $user_email = $_SESSION['email'];
        
        $query = "SELECT * FROM trip WHERE user_email = '$user_email'";
        $freight=mysqli_query($connection, $query);
        while($res = mysqli_fetch_array($freight)){
          
        ?>
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
            <h6>Connections id: <?php echo $res['id'];?></h6>
              <div class="unit-4-icon mr-4"></div>
              <div>
                <h3>Email: <?php echo $res['user_email'];?></h3>
                <h3>Email: <?php echo $res['user_phone'];?></h3>
                <h3>Destination: <h3>
                <p style= "color: darkslateblue;">&nbsp;&nbsp;&nbsp; From: -- <?php echo ucwords($res['originAddress'])." -- To -- ". ucwords($res['destinationAddress']);?></p>
                <p>Bill: Rs/- <span style= "color: darkslateblue;"><?php echo $res['total_bill'];?></span> &nbsp;&nbsp; <span style="color: grey; font-size: 14px;"><?php echo $res['bill_status'];?></span></p>
              </div>
            </div>
          </div>
          <hr>
          <?php }}?>
        </div>
      </div>
    </div>
>
    <!-- footer -->
    <?php include('_footer.php');?>
  </body>
</html>