<?php 
    session_start(); 
    error_reporting(E_PARSE);
	include('modal.php');
?> 

	
	<style>

        
         h1, h2, h3, p, li, h4, a { font-family: 'Lora', serif; 
        }
        
         a{color: aliceblue}
        
body{
background-image: url("img/Fondo/gearblue.png");"
    }
  </style>

   <link href="css/ihover.css" rel="stylesheet">
   <link href="css/footer.css" rel="stylesheet">
  
 <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet"> 
 
<link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css"
  integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
  crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg"style="background-color: #116deb;">
    <div class="container">
        <a class="navbar-brand" href="#">
           <img src="img/logo_nav.png" href="index.php" width="90%" height="100%" class="animated bounceInLeft">
       </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="background-color:rgba(87, 240, 74, 0.3);">
           <span class="navbar-toggler-icon"></span>
       </button>

        <div class="collapse navbar-collapse flex-column align-items-end" id="navbarCollapse">
            <!-- navbar1 -->
            <div class="navbar-nav mb-lg-0">
                <h5 class="nav-item nav-link" href="#" style="color:#7ff57f; margin-right:100px;"><i class="fa fa-phone text-white"></i> : 1-800-678-0502</h5>
                <a class="nav-item nav-link" href=""><i class="fa fa-facebook text-white"></i></a>
             
                <a class="nav-item nav-link" href="#"><i class="fa fa-twitter text-white" ></i></a>
                
                <?php
                          if(!$_SESSION['id']==""){
                                echo ' 
                                    
                                     <!-- Example split danger button -->
                               
                                     <div class="">
                                     <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><li><i class="fa fa-user"></i>
        Mi cuenta
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
     
      <a class="dropdown-item" href="#account" data-toggle="modal"><img src="svg/si-glyph-flower.svg"/ style="width:24px; height:24px;"> My Account</a>
                                     <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#profile" data-toggle="modal"><img src="svg/si-glyph-man-doctor.svg"/ style="width:24px; height:24px;"> My Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#logout" data-toggle="modal"><img src="svg/si-glyph-turn-off.svg"/ style="width:24px; height:24px;"> Logout</a>
            
         </div>
        </li></li>
                                            <li id="cartme" style="cursor:pointer">
                                            <a class="nav-item nav-link" id="cart_control" title="Shopping Cart" data-toggle="popover"><i class="fa fa-shopping-cart fa-fw" id="cartir"></i></a>
                                            </li>
                                   
                                    </div>
                                  
                                 ';
                            }else{
                                echo ' 
                                          <a class="nav-item nav-link" href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-user text-white"> Login</i></a>
                                          	<li id="cartme" style="cursor:pointer">
                                            <a class="nav-item nav-link" id="cart_control" title="Shopping Cart" data-toggle="popover"><i class="fa fa-shopping-cart fa-fw" id="cartir"></i></a>
                                            </li>
                                 ';
                            }
                        ?>
                      
            </div>
            <div id="Cont-Popover" style="display:none;">
            </div>

            <!-- navbar2 -->
            <ul class="navbar-nav mt-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">HOME</a>
                </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SERVICES</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="repair_maintenance.php">Equipment Maintenance and Repair</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="rental_equipment.php">Cleaning Rental Equipment</a>
                        <div class="dropdown-divider"></div>
<!--
                            <a class="dropdown-item" href="deliver.php">Equipment Deliver</a>
                            <div class="dropdown-divider"></div>
-->
                        <a class="dropdown-item" href="equipment_restoration.php">Equipment Restoration</a>       
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Training</a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PRODUCTS</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="equipment_seccion.php">New Equipment</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="chemicals_supplies.php">Cleaning Chemicals and Supplies</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="Floor_seccion.php">Floor Care</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="batteries.php">Batteries</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="parts_and_accessories.php">Parts and Accessories</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="green_cleaning.php" >Green Cleaning</a>
                        <div class="dropdown-divider"></div>  
                    </div>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="contact.php">CONTACT</a>
                </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="about.php" id="navbarDropdownAbout" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">
                ABOUT
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownAbout">
                <a class="dropdown-item" href="about.php">Who we are</a>
                  <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="">Our Values</a>
                  <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="">Mission and Vision</a>
                  <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="">Training</a>
                  <div class="dropdown-divider"></div>
              </div>
            </li>
            </ul>
        </div>
    </div>
</nav>
    <script src="js/eskju.jquery.scrollflow.min.js"></script>
    <script src="js/parallax.js"></script>
<script>
$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
  }
  var $subMenu = $(this).next(".dropdown-menu");
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass("show");
  });


  return false;
});
$(document).ready(function(){
  $("#Cont-Popover").load("PopOver.php");
    $('[data-toggle="popover"]').popover({
      html:true,
      content: function(){
        return $("#Cont-Popover").html();
      }
    });
});


</script>

<style>
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu a::after {
  transform: rotate(-90deg);
  position: absolute;
  right: 6px;
  top: .8em;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-left: .1rem;
  margin-right: .1rem;
}
    
    .dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid #b9b9b9;
}

.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.25rem 1.5rem;
  clear: both;
  font-weight: 400;
  color: #6ba06b;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}

.dropdown-item:hover, .dropdown-item:focus {
  color: #08f008;
  text-decoration: none;
  background-color: rgba(14, 255, 42, 0.46);
}

.dropdown-item.active, .dropdown-item:active {
  color: #08f008;
  text-decoration: none;
  background-color: #08f008;
}
    
.navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
  color: #08f008;
}    

    .navbar-toggler-icon {
  display: inline-block;
  background-color:  aliceblue;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle; 
  content: "";
  background: no-repeat center center;
  background-size: 100% 100%;
}
#cart-control{cursor:pointer}
.fa-shopping-cart:hover{color:white;}

.popover{max-width:600px;
max-height:300px;
width:auto;
}
.conten{
  background-color: white;
  border-radius: 10px;
  border: 2px solid rgba(0, 0, 0, 0.06);
  box-shadow: 5px 6px 0px 0px rgba(6, 6, 6, 0.19);
  margin-top: 5px;
  margin-bottom: 10px;
  width:300px;
  height:50px;
}

</style>
