<?php 
    session_start(); 
    error_reporting(E_PARSE);
    include('modal.php');
  
?> 
   <link href="css/ihover.css" rel="stylesheet">
   <link href="css/footer.css" rel="stylesheet">
   <link href="css/nav.css" rel="stylesheet">
 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

<style>
  
         h1, h2, h3, p, li, h4,  { font-family: 'Lora', serif; 
        }
        
       body{
background-image: url("img/Fondo/gearblue.png");"
    }
</style>

<nav class="navbar navbar-expand" style="background-color: #50b176;">
   
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse1" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="background-color:rgba(87, 240, 74, 0.3);">
           <span class="fa fa-sort-desc"></span>
       </button>
        <div style="height: 15px;" class="collapse navbar-collapse" id="navbarCollapse1">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <h5 class="nav-item nav-link" href="#" style="color:#000000; margin-right:0px;"><i class="fa fa-phone text-black"></i> : 1-800-678-0502</h5>
                </li>
                <li class="nav-item">
                    <a id="item1" class="nav-item nav-link" href="#" style="color:#fdfdfd;"><i class="fa fa-envelope-o"></i> </a>
                </li>
                <li class="nav-item">
                    <a id="item1" class="nav-item nav-link" href="#"><i class="fa fa-facebook fa-x5 text-black"></i></a>
                </li>
                <li class="nav-item">
                    <a id="item1" class="nav-item nav-link" href="#"><i class="fa fa-twitter text-black" ></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <?php
                          if(!$_SESSION['id']==""):
                                echo ' 
                                     <!-- Example split danger button -->
                               
                <div class="">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <li>
                        <i class="fa fa-user"></i>Mi cuenta
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    
                            <a class="dropdown-item" href="#account" data-toggle="modal"><img src="svg/si-glyph-flower.svg"/ style="width:24px; height:24px;">
                            My Account
                            </a>
                            <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#profile" data-toggle="modal"><img src="svg/si-glyph-man-doctor.svg"/ style="width:24px; height:24px;">
                                My Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#logout" data-toggle="modal"><img src="svg/si-glyph-turn-off.svg"/ style="width:24px; height:24px;"> Logout
                                </a>
                            
                        </div>
                    </li>

                        </li>
                        <h4>
                            <li id="cartme" style="cursor:pointer">
                            <a class="nav-item nav-link" id="cart_control" title="Carrito de compras" data-toggle="popover">
                                <i class="fa fa-shopping-cart fa-fw" id="cartir"></i>
                            </a>
                            </li>
                        </h4>                   
                </div>
                                 ';
                            else:
                                echo ' 
                                  <li class="nav-item">
                                <input class="search-txt" type="text" name="" placeholder="Search Something">
                                 <a id="item1" style="color: #e84118;" class="nav-item nav-link search-btn" href="#">
                                   <i class="fa fa-search" style="font-size:18px"></i>
                               </a>
                           </li>
                                  <a class="nav-item nav-link" href="#" data-toggle="modal" data-target="#myModal">
                                    <i class="fa fa-user text-black"> Login</i>
                                  </a>
                                  <h4>
                                  <li id="cartme" style="cursor:pointer">
                                    <a  class="nav-item nav-link" id="cart_control" title="Carrito de compras" data-toggle="popover">
                                      <i class="fa fa-shopping-cart fa-fw" id="cartir"></i>
                                    </a>
                                  </li>
                                  </h4>
                                 ';
                            endif;
                        ?>
                         </ul>
                 </div>
        </div>
</nav>

<!-- end nav 1-->
<nav class="navbar navbar-expand-lg style="background-color: #116deb;"">
    <div class="container">
        <a class="navbar-brand" href="#">
           <img id="logo" src="img/logo_nav.png" href="index.php" width="90%" height="100%"; !important class="animated bounceInLeft">
       </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="background-color:rgba(87, 240, 74, 0.3);">
           <span class="fa fa-sort-desc"></span>
       </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <!-- navbar1 -->
  
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php" style="color:white">HOME</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"aria-expanded="false" style="color:white">
                   SERVICES
                    </a>
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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">
                    PRODUCTS
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
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
                    </ul>
                 </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php" style="color:white">CONTACT</a>
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
   <div id="Cont-Popover" style="display:none;">
            </div>
    <script src="js/eskju.jquery.scrollflow.min.js"></script>
<script>
    $('.dropdown-menu a.dropdown-toggle').on('click', function(e) { // desencadena el evento sobre estas clases
  if (!$(this).next().hasClass('show')) { // si es mientras no sea apunte a un siguiente 
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show"); 
  }
  var $subMenu = $(this).next(".dropdown-menu"); // hacemos la referencia al sisguiente
  $subMenu.toggleClass('show'); // mostramos el sigiente


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
