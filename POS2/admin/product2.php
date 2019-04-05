
<?php include('session.php'); ?>
<?php include('header.php'); ?>
<body>
<div id="wrapper">
<?php include('navbar.php'); ?>
<div style="height:50px;"></div>
<div id="page-wrapper">
<div class="container-fluid">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Products
				<span class="pull-right">
					<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addproduct"><i class="fa fa-plus-circle"></i> Add Product</button>
				</span>
			</h1>
        </div>
    </div>
		<input type="hidden" name="" value="<?php echo $_POST['id_txt'];?>">
    <div class="row">
        <div class="col-lg-12">
            <table width="100%" class="table table-striped table-bordered table-hover" id="prodTable">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="infoProduct">
                <?php
                    $pq=mysqli_query($conn,"select * from product as p where p.categoryid = \"$_POST[id_txt]\"");
                    while($row=mysqli_fetch_array($pq)){
                        $pid=$row['productid'];
                        $nameProd = $row['product_name'];
                    ?>
                        <tr>
                            <td><?php echo $row['product_name'];?></td>
                            <td><?php echo $row['product_price']; ?></td>
                            <td><?php echo $row['product_qty']; ?></td>

                            <td>
                                <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editprod_<?php echo $pid; ?>"><i class="fa fa-edit"></i> Edit</button>
                                <button onclick="getPhoto(<?= $pid; ?>)" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addphoto"><i class="fa fa-edit"></i> Add Photo</button>
                                <button onclick="getProductDelete(<?= $pid; ?>,<?=$_POST['id_txt']?>)" class="btn btn-danger btn-sm" data-toggle="modal" ><i class="fa fa-trash"></i> Delete</button>
                            </td>                                                                                                         <!-- data-target="#delproduct" -->
                        </tr>
                    <?php
                    
                    }
                ?>

                </tbody>
            </table>
            <?php include('product_button.php'); ?>
        </div>
    </div>
</div>
</div>
</div>

<?php include('script.php'); ?>
<?php include('modal.php'); ?>
<?php include('add_modal.php'); ?>
<script src="js/product2.js"></script>
<!-- <script src="assets/js/ajax_productos.js" charset="utf-8"></script> -->
</body>
