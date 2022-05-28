<?php
include('../config.php');
$query="SELECT * FROM admin";
$result=mysqli_query($connection,$query) or die(mysqli_error($connection));
while($j=mysqli_fetch_array($result)){
?> 
 <div class="container-fluid sb1">
        <div class="row">
            <div class="col-md-6 col-sm-3 col-xs-6 sb1-1">
                <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
            </div>
            <div class="col-md-6 col-sm-3 col-xs-6">
                <!-- Dropdown Trigger -->
                <a  class='waves-effect dropdown-button top-user-pro text-primary text-uppercase font-weight-bold' href='#' data-activates='top-menu'><?php echo $j ['name']?><i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                <!-- Dropdown Structure -->
                <ul id='top-menu' class='dropdown-content top-menu-sty'>
                    <li></i>
                    </li>
                    <li></i>
                    </li>
                    <li class="divider"></li>
                    <li><a href="../adminLogout.php?logout" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php }?>