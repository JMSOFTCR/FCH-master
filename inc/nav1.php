<?php 
    session_start(); 
    error_reporting(E_PARSE);
	include('modal-login.php');
	include('modal.php');
?>

<style>
.glyph-icon svg {
width:16px;
height:16px;
}
body{
background-image: url("img/Fondo/gearblue.png");"
     
    }
    
     h1, h2, h3, p, li, h4, a { font-family: 'Lora', serif; }
  </style>

   <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet"> 
      
  
<head> 
     <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css"
  integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
  crossorigin="anonymous">
</head>
  <link href="css/ihover.css" rel="stylesheet">
    
    <div class="col-lg-12"></div>
    <!-- Navigation -->
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark fixed-top" style="background-color: #116deb;">
      <div class="container">
            
        <a class="navbar-brand" href="index.html"></a>
                <img src="img/logo_nav.png" href="index.php" width="70%" height="100%" class="animated bounceInLeft">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php" style="color:white;">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">
                Services
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownService" >
                <a class="dropdown-item" href="">Cleaning Rental Equipment</a>
                <a class="dropdown-item" href="deliver.php">Equipment Deliver</a>
                <a class="dropdown-item" href="">Equipment Repair</a>
                <a class="dropdown-item" href="equipment_restoration.php">Equipment Restoration</a>
                <a class="dropdown-item" href="">Maintenance Prevention</a>
                <a class="dropdown-item" href="#">Training</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProducts" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">
                Products
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownGallery">
                <a class="dropdown-item" href="equipment_seccion.php">New Equipment</a>
                <a class="dropdown-item" href="">Cleaning Chemicals</a>
                <a class="dropdown-item" href="Floor_seccion.php">Floor Care</a>
                <a class="dropdown-item" href="batteries.php">Batteries</a>
                <a class="dropdown-item" href="parts_and_accessories.php">Parts and Accessories</a>
                <a class="dropdown-item" href="green_cleaning.php" >Green Cleaning</a>
              </div>
            </li>
               <li class="nav-item">
              <a class="nav-link" href="contact.php" style="color:white">Contact</a>
            </li> 
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="about.php" id="navbarDropdownAbout" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">
                About
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownAbout">
                <a class="dropdown-item" href="about.php">Who we are</a>
                <a class="dropdown-item" href="">Our Values</a>
                <a class="dropdown-item" href="">Mission and Vision</a>
                <a class="dropdown-item" href="">Training</a>
              </div>
            </li>
           
              <?php
                          if(!$_SESSION['id']==""){
                                echo ' 
                                    
                                     <!-- Example split danger button -->
                               
                                     <div class="btn-group">
                                    <button type="button" class="btn btn-info" data-toggle="dropdown"> <svg-icon><img src="svg/si-glyph-person.svg"/ style="width:24px; height:24px;"></button>
                                    <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#account" data-toggle="modal"><img src="svg/si-glyph-flower.svg"/ style="width:24px; height:24px;"> My Account</a>
                                     <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#profile" data-toggle="modal"><img src="svg/si-glyph-man-doctor.svg"/ style="width:24px; height:24px;"> My Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#logout" data-toggle="modal"><img src="svg/si-glyph-turn-off.svg"/ style="width:24px; height:24px;"> Logout</a>
                                    </div>
                                    </div>
                                  
                                 ';
                            }else{
                                echo ' 
                                       
                                             <div class="container">
                                             <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal"><img src="svg/si-glyph-turn-off.svg"/ style="width:24px; height:24px;"> Login</button>             
                                             </div>
                                 ';
                            }
                        ?>
                                          
                                             
          </ul>
         
        </div>
      </div>
    </nav>
  <!-- Modal -->
 

         <!-- Bootstrap core JavaScript -->

  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/eskju.jquery.scrollflow.min.js"></script>