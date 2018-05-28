<?php 
	include('modal-login.php');
	include('modal.php');
?>

<style>
    h4 {color: aliceblue}
</style>

<section class="index-link">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="link-area">
                    <h4 style="text-decoration: underline;">About Us</h4>
                    <P style="color: white">We are the number 1 company in the equipment maintenance and repair market.</P>
                    <a href="#"><i class="fa fa-facebook" style="font-size:50px; color:#0a00ff;"></i></a>
                    <a href="#"><i class="fa fa-twitter" style="font-size:50px; color:#08e3ff; text-indent: 8px;"></i></a>
                    <a href="#"><i class="fa fa-linkedin" style="font-size:50px; color:#ededed;text-indent: 8px;"></i></a>
                    <a href="#"><i class="fa fa-whatsapp" style="font-size:50px; color:#00eb2d; text-indent: 8px;"></i></a>
                
                </div>
            </div>
                <div class="col-md-3">
                <div class="link-area">
                    <h4 style="text-decoration: underline;">Quick Page</h4>
                    <ul>
                    <a class="btn btn-lg btn-info btn-sm" href="index.php">Home</a>
                       
          <div class="btn-group">
  <button class="btn btn-info btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Services
  </button>
  <div class="dropdown-menu">
  
                <a class="dropdown-item" href="equipment_seccion.php">New Equipment</a>
                <a class="dropdown-item" href="">Cleaning Chemicals</a>
                <a class="dropdown-item" href="Floor_seccion.php">Floor Care</a>
                <a class="dropdown-item" href="batteries.php">Batteries</a>
                <a class="dropdown-item" href="parts_and_accessories.php">Parts and Accessories</a>
                <a class="dropdown-item" href="green_cleaning.php" >Green Cleaning</a>
     
  </div>
</div>
          
          <div class="btn-group">
  <button class="btn btn-info btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Products
  </button>
  <div class="dropdown-menu">
  
                <a class="dropdown-item" href="equipment_seccion.php">New Equipment</a>
                <a class="dropdown-item" href="">Cleaning Chemicals</a>
                <a class="dropdown-item" href="Floor_seccion.php">Floor Care</a>
                <a class="dropdown-item" href="batteries.php">Batteries</a>
                <a class="dropdown-item" href="parts_and_accessories.php">Parts and Accessories</a>
                <a class="dropdown-item" href="green_cleaning.php" >Green Cleaning</a>
     
  </div>
</div>  
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="about.php"> About Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="link-area">
                    <h4 style="text-decoration: underline;">My Account</h4>
                    <ul>
                     <?php
                          if(!$_SESSION['id']==""){
                                echo ' 
                                    
                                     <!-- Example split danger button -->
                               
                                     <a class="dropdown-item" href="#account" data-toggle="modal"><img src="svg/si-glyph-flower.svg"/ style="width:24px; height:24px;"> My Account</a>
                                     <a class="dropdown-item" href="#profile" data-toggle="modal"><img src="svg/si-glyph-man-doctor.svg"/ style="width:24px; height:24px;"> My Profile</a>
                                  
                                 ';
                            }else{
                                echo ' 
                                       
                                             <a class="dropdown-item" href="#myModal" data-toggle="modal"><img src="svg/si-glyph-flower.svg"/ style="width:24px; height:24px;"> My Account</a>
                                             <a class="dropdown-item" href="#myModal" data-toggle="modal"><img src="svg/si-glyph-man-doctor.svg"/ style="width:24px; height:24px;"> My Profile</a>
                                 ';
                            }
                        ?>   
             
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="link-area">
                    <h4 style="text-decoration: underline;">Contact Us:</h4>
                    <ul>
                    <li><p style="color:white"><i class="fa fa-envelope-o text-white"></i> : fchmaintenance@gmail.com</p></li>
                    <li><p style="color:white"><i class="fa fa-address-book-o text-white"></i> : 1-800-678-0502</p></li>
                    <li><p style="color:white"><i class="fa fa-phone text-white"></i> : 604-265-4794</p></li>
                    <li><p style="color:white"><i class="fa fa-compass text-white"></i> : General Mailing Address: 13-4 Alliance Blvd. Suite 111 Barrie, On  L4M 1L2 </p></li>
                    <li><p style="color:white"><i class="fa fa-compass text-white"></i> : 236 Eglington Rd S. <br> Callander, On, Canada <br> P0H-1H0 </p></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="index-social">
    <div class="container">
    <div class="row index-social-link text-center">
            <p class="copy-c"><p>&copy; 2017 FCHMAINTENANCE</p>
        </div>
        </div>
</section>