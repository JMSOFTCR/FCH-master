<!-- 
<!DOCTYPE html>
<html lang="en">

<head>

   <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FCHMAINTENANCE</title> -->

    <!-- Bootstrap core CSS -->
    <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <link href="css/nav.css" rel="stylesheet">
    <style>
        html {
            font-size: 16px;   
        } 
    </style>
</head>

<body>

    <div >

        <!-- Sidebar -->
        <div id="sidebar-wrapper" style="background-color:rgba(214, 224, 224, 0.6)">
            <ul class="sidebar-nav fixed-top" >
                <li class="sidebar-brand">
                    <a href="index.php" ><img style="width:60%;" src="img/all_logos-12.png"><img/>
                        
                    </a>
                </li>
                
                <li>
                    <a href="index.php">Dashboard</a>
                </li>
                <div class="dropdown-divider"></div>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">User</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="customer.php">Customer</a>
                        </li>
                        <li>
                            <a href="supplier.php">Supplier</a>
                        </li>
                    </ul>
                </li>
                <div class="dropdown-divider"></div>
                <li>
                    <a href="product.php">All Product</a>
                </li>
                <div class="dropdown-divider"></div>
                <li>
                    <a href="category.php">Category</a>
                </li>
                <div class="dropdown-divider"></div>
                <li class="active">
                    <a href="#ProductSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Product</a>
                    <ul class="collapse list-unstyled" id="ProductSubmenu">
                        <?php
                                            $caq=mysqli_query($conn,"select * from category order by category_name asc ");
                                            while($catrow=mysqli_fetch_array($caq)){
                                                ?>
                            <div class="dropdown-divider"></div>
                            <li>
                                <form action="product2.php" method="post" name="Detalle"><input name="id_txt" type="hidden" value="<?php echo $catrow['categoryid']; ?>" /><input name="Detalles" type="submit" value="<?php echo $catrow['category_name']; ?>" class="btn btn-success btn-sm" style=" display: inline-block;
                     width: 70%;
                     margin-top: 3px;
                     margin-bottom: 3px;
                     margin-left: 3px;
                     margin-right: 3px;
                     border-radius: 5px;  " /></form>
                            </li>
                            <?php
                                            }

                                        ?>
                    </ul>
                </li>
                <div class="dropdown-divider"></div>
                <li class="active">
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Reports</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="sales.php">Sales Report</a>
                        </li>
                        <li>
                            <a href="inventory.php">Inventory Report</a>
                        </li>
                    </ul>
                </li>
                <div class="dropdown-divider"></div>            
              
                <div class="dropdown-divider"></div>
                <li>
                    <a class="" style="background-color:rgba(253, 227, 227, 0.3) " href="#logout" data-toggle="modal">Exit</a>
                </li>
               
            </ul>
            
        </div>
        
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Menu</a>
                
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>