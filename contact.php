<?php 
   session_start();
   include('config.php');?>
<!DOCTYPE html>
<html lang="en">
     <!-- head -->
     <?php include('_head.php');?> <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <!-- navbar -->
    <?php include('_navbar.php');?>
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/internet_wires.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light text-uppercase font-weight-bold">Contact Us</h1>
            <p class="breadcrumb-custom"><a href="index.html">Home</a> <span class="mx-2">&gt;</span> <span>Contact</span></p>
          </div>
        </div>
      </div>
    </div>  

    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">
          <?php
            include_once("config.php");
            if(isset($_POST['submit'])) {
              $first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
              $last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
              $email = mysqli_real_escape_string($connection, $_POST['email']);
              $subject = mysqli_real_escape_string($connection, $_POST['subject']);
              $message = mysqli_real_escape_string($connection, $_POST['message']);
              $query = "INSERT INTO `contact`(`first_name`, `last_name`, `email`, `subject`, `message`) VALUES ('$first_name','$last_name','$email','$subject','$message')";
              $result  = mysqli_query($connection, $query) or die ("ERROR");
              mysqli_close($connection);

              echo "<div class=\"uk-alert-primary\" uk-alert>
              <a class=\"uk-alert-close\" uk-close></a>
              <p>Message submit successfully!</p>
                </div>";
            }
          ?>
            <form action="contact.php" class="p-5 bg-white" method="POST" enctype="multipart/form-data">
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control" name= "first_name">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control" name= "last_name">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control" name= "email">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" id="subject" class="form-control" name= "subject">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..." name= "message"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white" name = "submit">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">Lahore, Pakistan</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+92345678910</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">admin@ptclconnection.com</a></p>

            </div>
            
          </div>
        </div>
      </div>
    </div>
    <!-- footer -->
    <?php include('_footer.php');?>
  </body>
</html>