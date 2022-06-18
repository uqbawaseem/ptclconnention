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

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/internet_wires.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light text-uppercase font-weight-bold">About Us</h1>
            <p class="breadcrumb-custom"><a href="index.html">Home</a> <span class="mx-2">&gt;</span> <span>About Us</span></p>
          </div>
        </div>
      </div>
    </div>  

  
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          
          <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade">
            <img src="images/history.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-6 order-md-1" data-aos="fade">
            <div class="text-left pb-1 border-primary mb-4">
              <h2 class="text-primary">Our History</h2>
            </div>
            <p> ISP (internet service provider) is a company that provides individuals and organizations access to the internet and other related services. An ISP has the equipment and the telecommunication line access required to have a point of presence on the internet for the geographic area served..</p>
          </div>
          
        </div>
      </div>
    </div>
  
    <!-- footer -->
    <?php include('_footer.php');?>
  </body>
</html>