<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
      
      <link href="vendor/bootstrap/css/footer.css" rel="stylesheet">
    <title>FCHMAINTENANCE</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main2.css" rel="stylesheet">
    <link href="css/sweetalert.css" rel="stylesheet">
      
 
      
 <script src="vendor/jquery/jquery.min.js"></script>
 <script src="js/sweetalert.min.js"></script>
    <!-- Custom styles for this template -->

   
    <link href="css/modern-business.css" rel="stylesheet">
  </head>
    <body>
<?php
	require_once "conn.php";
	include './inc/nav.php'; 
	?>
<div class="container tit_cart">
<div style="float:left">
<form action="index.php">
<button type="submit" class="btn btn-md btn-info">Seguir comprando</button>
</form>
</div>
  <?php
                          if(!$_SESSION['id']==""){
                                echo '<div style="float:right">
<form action="index.php">
<button type="submit" class="btn btn-md btn-success">Pagar</button>
</form>
</div>';
                          }else{ 
                              echo'
<div style="float:right">
<form action="#" data-toggle="modal" data-target="#myModal">
<button type="submit" class="btn btn-md btn-success">Pagar</button>
</form>
</div>'; } ?>    
	<h3>Tu carro de compras</h3>
</div>
	<?php 
	if(isset($_SESSION["Array"])) {		
		foreach ($_SESSION["Array"] as $row) {
			$query=mysqli_query($conn,"select * from product where productid = \"$row[idp]\"");
			while($rw = mysqli_fetch_array($query)){
			?>
			<div class="container contai">
			<div class="row">
				<div style="display:inline-block;">
					<img src="POS/<?php if (empty($rw['photo'])){echo "upload/noimage.jpg";}else{echo $rw['photo'];} ?>" style="width: 100px; height:100px;margin:auto;">
				</div>
				<div style="display:inline-block;">
					<span> <?php echo $rw['product_name']; ?></span>
				</div>
				<div style="font-size: 11px;overflow-x: auto;width: 65%;height: 100px;">
				<p><?php echo $rw["description"] ?></p>
				</div>
				<div style="margin-left:30%;width:70%;">
				<div style="display:inline-block;padding:5px;margin-right:20%">
					<button type="button" class="btn btn-danger btn-sm remove_product" value="<?php echo $rw['productid']; ?>">Remove</button> 
				</div>
				<div style="display:inline-block;margin-right:5%;">
					<button type="button" class="btn btn-warning btn-sm minus_qty" value="<?php echo $rw['productid']; ?>"><i class="fa fa-minus fa-fw"></i></button> 
				</div>
				<div style="display:inline-block;" class="qty_cart_<?php echo $rw['productid'];?>">
					<span><strong><?php echo $row['qty']; ?></strong></span>
				</div>
				<div style="display:inline-block;margin-left:5%;">
					<button type="button" class="btn btn-primary btn-sm add_qty" value="<?php echo $rw['productid']; ?>"><i class="fa fa-plus fa-fw"></i></button> 
				</div>
				<div style="display:inline-block;float:right;">
					<li class="total_cart_<?php echo $rw['productid'];?>" value="<?php echo $rw['product_price'];?>"><strong style="color:#F7BA71;">Total: $<?php echo $rw['product_price']*$row['qty'] ?></strong></li>
				</div>
				</div>


			</div>
			</div>
			<?php
		}
		}								
	}else{echo "No hay productos en su carro de compras";}
include "./inc/footer2.php"
;?>
	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

   	<script type="text/javascript">
   		$(".remove_product").on("click",function remove(){
   			var id = {"idp":$(this).val()}
   			$.ajax({
   				url:"remove_cart.php",
   				data:id,
   				success:function(){
   					swal("success");
   					location.reload();
   				}
   			});
   		});
   		$(".add_qty").on("click",function(){
   			var id = {"idp":$(this).val()}
   			var rec = $(this).val();
   			var total = $(".total_cart_"+rec+"").val();
   			$.ajax({
   				url:"more_cart.php",
   				data:id,
   				success:function(data){
   					$(".qty_cart_"+rec+"").html("<span><strong>"+data+"</strong></span>");
   					$(".total_cart_"+rec+"").html("<strong style='color:#F7BA71;'>Total: $"+total*data+"</strong>");
   				}
   			});
   		});
   		$(".minus_qty").on("click",function(){
   			var id = {"idp":$(this).val()}
   			var rec2 = $(this).val();
   			var total2 = $(".total_cart_"+rec2+"").val();
   			$.ajax({
   				url:"less_cart.php",
   				data:id,
   				success:function(data){
   					if(data ==-1){location.reload();}else{$(".qty_cart_"+rec2+"").html("<span><strong>"+data+"</strong></span>");
   					$(".total_cart_"+rec2+"").html("<strong style='color:#F7BA71;'>Total: $"+total2*data+"</strong>");
   					}
   					}
   			});
   		});
   	</script>
</body>
</html>