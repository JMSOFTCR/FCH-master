<?php include('session.php'); ?>
<?php include('header.php'); ?>
<body>
<div id="wrapper">
<?php include('navbar.php'); ?>
<div style="height:60px"></div>
<div id="page-wrapper">
<div class="container-fluid">

                     
	<div class="row" style="text-align:center">

<?php
							$product=mysqli_query($conn,"select * from product");
                            $nro_prod=mysqli_num_rows($product); 
                            $supplier=mysqli_query($conn,"select * from supplier");
                            $nro_supp=mysqli_num_rows($supplier); 
                            $category=mysqli_query($conn,"select * from category");
                            $nro_cat=mysqli_num_rows($category); 	
						?>
 <div class="col-md-3" style="margin-bottom:20px;">
    	<div class="card bg-primary" >
                            <div class="card-body" >
                                <div class="d-flex no-block"  >
                                    <div class="m-r-20 align-self-center" ><img src="../dist/assets/img/icon/assets-w.png" alt="Income"></div>
                                    <div class="align-self-center">
                                        <h6 class="text-white m-t-10 m-b-0" >Total Products</h6>
                                        <h2 class="m-t-0 text-white"><?php echo $nro_prod ?></h2></div>
                                </div>
                            </div>
                        </div>  
  </div>
          
             <div class="col-md-3" style="margin-bottom:20px;">
    	<div class="card" style="background-color:#b19c00">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div class="m-r-20 align-self-center"><img src="../dist/assets/img/icon/income-w.png" alt="Income"></div>
                                    <div class="align-self-center" style="text-align:center">
                                        <h6 class="text-white m-t-10 m-b-0">Total Category</h6>
                                        <h2 class="m-t-0 text-white"><?php echo $nro_cat ?></h2></div>
                                </div>
                            </div>
                        </div>  
  </div>  
        <div class="col-md-3" style="margin-bottom:20px;">
    	<div class="card bg-success" style="background-color: #06d79c !important;">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div class="m-r-20 align-self-center"><img class="icon" src="../dist/assets/img/icon/organization.svg" alt="Income"></div>
                                    <div class="align-self-center" style="text-align:center">
                                        <h6 class="text-white m-t-10 m-b-0" style="color:white">Total Supplier</h6>
                                        <h2 class="m-t-0 text-white" style="color:white"><?php echo $nro_supp ?></h2></div>
                                </div>
                            </div>
                        </div>  
  </div>
   
        <div class="col-md-3" style="margin-bottom:20px;">
    	<div class="card bg-primary">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div class="m-r-20 align-self-center"><img src="../dist/assets/img/icon/income-w.png" alt="Income"></div>
                                    <div class="align-self-center">
                                        <h6 class="text-white m-t-10 m-b-0">Total Assets</h6>
                                        <h2 class="m-t-0 text-white">987,563</h2></div>
                                </div>
                            </div>
                        </div>  
  </div>
</div>
<hr>
<div style="height:40px;">
    
</div>
<div class="row" style="text-align:center">
    <div class="card-body col-lg-4">
        <div class="card bg-success" style="background-color: #16d706 !important;">
            <div class="card-body">
                <div class="d-flex no-block">
                    <div class="m-r-20 align-self-center"><img src="../dist/assets/img/icon/assets-w.png" alt="Income"></div>
                    <div class="align-self-center">
                        <h6 class="text-white m-t-10 m-b-0">Products</h6>
                        <a href="product.php" class="btn btn-primary">Add Products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <div class="card-body col-lg-4">
        <div class="card bg-success" style="background-color: #299ff5 !important;">
            <div class="card-body">
                <div class="d-flex no-block">
                    <div class="m-r-20 align-self-center"><img src="../dist/assets/img/icon/income-w.png" alt="Income"></div>
                    <div class="align-self-center">
                        <h6 class="text-white m-t-10 m-b-0" style="color:white">Category</h6>
                        <a href="category.php" class="btn btn-danger">Add Category</a>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <div class="card-body col-lg-4">
        <div class="card bg-success" style="background-color: #f55829 !important;">
            <div class="card-body">
                <div class="d-flex no-block">
                    <div class="m-r-20 align-self-center"><img class="icon" src="../dist/assets/img/icon/organization.svg" alt="Income"></div>
                    <div class="align-self-center">
                        <h6 class="text-white m-t-10 m-b-0" style="color:white">Supplier</h6>
                        <a href="supplier.php" class="btn btn-success">Add Supplier</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

</div>
<?php include('script.php'); ?>
<?php include('modal.php'); ?>
</body>
</html>


<style>

    .icon {
  width: 50px;
  height: 50px;
}
    .row {

    display: -ms-flexbox;
 
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    
}
    body {

    font-family: "Montserrat", sans-serif;
    color: #67757c;
    font-weight: 300;

}
.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;

}
    
.d-flex {

    display: -ms-flexbox !important;
    display: flex !important;

}
    


</style>