<?php 
    session_start(); 
    error_reporting(E_PARSE);
	include('modal.php');
?> 
	<?php include('cart_search_field.php'); ?>
    <link href="css/ihover.css" rel="stylesheet">
<link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css"
  integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
  crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg" style="background-color: #116deb;">
    <div class="container">
        <a class="navbar-brand" href="#">
           <img src="img/logo_nav.png" href="index.php" width="90%" height="100%" class="animated bounceInLeft">
       </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
       </button>

        <div class="collapse navbar-collapse flex-column align-items-end" id="navbarCollapse">
            <!-- navbar1 -->
            <div class="navbar-nav mb-lg-0">
                <a class="nav-item nav-link" href="#">800-678-0502</a>
                <a class="nav-item nav-link" href="#" style="color:#7ff57f;">fchmaintenance@gmail.com</a>
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
                                            <a class="nav-item nav-link" id="cart_control"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                            </li>
                                   
                                    </div>
                                  
                                 ';
                            }else{
                                echo ' 
                                          <a class="nav-item nav-link" href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-user text-white"> Login</i></a>
                                          	<li id="cartme" style="cursor:pointer">
                                            <a class="nav-item nav-link" id="cart_control"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                            </li>
                                 ';
                            }
                        ?>
                      
            </div>

            <!-- navbar2 -->
            <ul class="navbar-nav mt-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">INICIO</a>
                </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">COMPUTADORAS</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="kits.php">GAMING</a>
                             <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="kits.php">COMBO / KITS</a>
                             <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="hogar.php">HOGAR / OFICINA</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="laptops.php">LAPTOPS</a>
                             <div class="dropdown-divider"></div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">COMPONENTES</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="mobo.php">TARJETA MADRE</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="ram.php">MEMORIA RAM</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="gpu.php">TARJETAS DE VIDEO</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="psu.php">FUENTES DE PODER</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="monitor.php">MONITORES</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="cooler.php">ENFRIAMIENTO</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="case.php">CASES</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">PROCESADORES</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="cpu-intel.php">INTEL</a></li>
              <li><a class="dropdown-item" href="cpu-amd.php">AMD</a></li>
            </ul>
                        </a>  
                    </div>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="contact.php">CONTACTENOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">NOSOTROS</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <script src="js/eskju.jquery.scrollflow.min.js"></script>
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
    body{
background-image: url("img/Fondo/gearblue.png");"
    }
        
         h1, h2, h3, p, li, h4, a { font-family: 'Lora', serif; 
        }
        
         a{color: aliceblue}
</style>

<script src="custom.js"></script>