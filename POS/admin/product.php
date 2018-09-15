<?php include('session.php'); ?>
<?php include('header.php'); ?>
<script src="js/sweetAlert.min.js" charset="utf-8"></script>

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
    <div class="row">
        <div class="table-responsive col-lg-12">
            <table width="100%" class="table table-striped table-bordered table-hover" data-source="data-source" id="datatable">
                <thead>
                    <tr>
											<th>Id Product</th>
                      <th>Product Name</th>
											<th>Supplier</th>
											<th>Category</th>
											<th></th>
											<th></th>
											<th></th>
											<th></th>
											<th></th>
											<th></th>
											<th></th>
											<th></th>
					            <th>Price</th>
											<th>Quantity</th>
											<th>Photo</th>
											<th></th>
											<th>Actions</th>
                    </tr>
                </thead>
                <tbody>
			          </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
<?php include('script.php'); ?>
<?php include('modal.php'); ?>
<?php include('add_modal.php'); ?>
<script src="custom.js"></script>
<link rel="stylesheet" href="css/tables.css">
<script src="js/ajax_producto.js" charset="utf-8"></script>
</body>
