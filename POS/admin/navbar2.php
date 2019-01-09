
<!-- Navigation -->
<!--
        <nav class="navbar navbar-default navbar-fixed-top " role="navigation" 
        style="margin-bottom: 0; ">
            <div class="navbar-header">
				<a class="navbar-brand" href="index.php">FCHMAINTENANCES</a>
            </div>
           
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<span class="glyphicon glyphicon-lock"></span> <?php echo $user; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu">
						<li><a href="#account" data-toggle="modal"><span class="glyphicon glyphicon-lock"></span>  My Account</a></li>
						<li class="divider"></li>
                        <li><a href="#logout" data-toggle="modal"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>   
                </li> 
            </ul>
-->
            <div class="navbar navbar-expand-lg sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                                
                
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Archive<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><span class="glyphicon glyphicon-user"></span> Users <span class="fa arrow"></span></a>
									<ul class="nav nav-third-level">
                                        <li>
                                            <a href="customer.php"> <i class="fa fa-credit-card"></i> Customers</a>
                                        </li>
                                        <li>
                                            <a href="supplier.php"> <i class="fa fa-truck"></i> Suppliers</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="category.php"> <i class="glyphicon glyphicon-th"></i> Category</a>
                                </li>
                                <li>
                                    <a href="product.php"> <i class="fa fa-product-hunt"></i> Products</a>
                                </li>
                         
                            </ul>
                        </li>
						<li>
                            <a href="#"><i class="fa fa-copy fa-fw"></i> Reports<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="sales.php"><i class="fa fa-money fa-fw"></i>
                                        sales report</a>
                                </li>
                                <li>
                                    <a href="inventory.php"><i class="fa fa-barcode fa-fw"></i> Inventory report</a>
                                </li>
                            </ul>
                        </li>	
                        <li>
                            <a href="#"><i class="fa fa-product-hunt fa-fw"></i> Products<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                	<?php
							$caq=mysqli_query($conn,"select * from category order by category_name asc ");
							while($catrow=mysqli_fetch_array($caq)){
								?>
								 <div class="dropdown-divider"></div>
								<li><form action="product2.php" method="post" name="Detalle"><input name="id_txt" type="hidden" value="<?php echo $catrow['categoryid']; ?>" /><input name="Detalles" type="submit" value="<?php echo $catrow['category_name']; ?>" class="btn btn-success btn-sm" style=" display: inline-block;
     width: 70%;
     margin-top: 3px;
     margin-bottom: 3px;
     margin-left: 3px;
     margin-right: 3px;
     border-radius: 5px;  " /></form></li>
								<?php
							}
						
						?>
                                
                                <li>
                                    <a href="sales.php"><i class="fa fa-money fa-fw"></i>
                                        sales report</a>
                                </li>
                                <li>
                                    <a href="inventory.php"><i class="fa fa-barcode fa-fw"></i> Inventory report</a>
                                </li>
                            </ul>
                        </li>
						<li><a href="#logout" data-toggle="modal"><i class="fa fa-sign-out fa-fw"></i> Exit</a></li>
                    </ul>
                </div>
            </div>
<!--        </nav>-->