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
  

    <div class="site-blocks-cover overlay" style="background-image: url(images/spinning-globe.webp);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light mb-5 text-uppercase font-weight-bold">PtclConnection Services</h1>

          </div>
        </div>
      </div>
    </div>  


    <div class="site-section bg-light" id= "connection">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Your Invoices</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
        <?php   
        if(isset($_SESSION['email'])){
        $user_email = $_SESSION['email'];
        
        $query = "SELECT * FROM invoice WHERE user_email = '$user_email'";
        $freight=mysqli_query($connection, $query);
        while($res = mysqli_fetch_array($freight)){
          
        ?>
          <div class="col-md-12 col-lg-12 mb-5 mb-lg-5" style="-moz-box-shadow: 0 0 3px #ccc;-webkit-box-shadow: 0 3px 3px #ccc;box-shadow: 0 03px 3px #ccc;">
            <div class="unit-4 d-flex">
            <h6>invoice id: <?php echo $res['id'];?></h6>
              <div class="unit-4-icon mr-4"></div>
              <div>
                <h3>Email: <?php echo $res['user_email'];?></h3>
                <h3>Due date: <?php echo $res['due_date'];?></h3>
                <h3>Service tax: <span><?php echo $res['service_tax'];?></span><h3>
                <p style= "color: darkslateblue;">&nbsp;&nbsp;&nbsp; Amount :  <?php echo ucwords($res['amount'])?> RS/-</p>
                <p style= "color: darkslateblue;">&nbsp;&nbsp;&nbsp; Amount After Due date : <?php echo ucwords($res['amount_after_due_date'])?> RS/-</p>
                <h3 style="align:right;"><span><?php echo $res['status'];?></span><h3>
              </div>
            </div>
          </div>
          <hr>
          <?php }}?>
      </div>
    </div>
>
    <!-- footer -->
    <?php include('_footer.php');?>
  </body>
</html>