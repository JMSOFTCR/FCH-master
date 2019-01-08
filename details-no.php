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
    <?php include('conn.php'); ?>
      
      <style>
 h4, p, li, h6, h1 {
  font-family: Georgia, Cambria, Times, "Times New Roman";
}


  </style>
      
  </head>

  <body>

    <!-- Navigation -->
    <?php include './inc/nav.php'; ?>  
    <!-- Page Content -->
    <div class="container">
        <?php
        if (isset($_GET['id'])){
    $id = $_GET['id'];
    $nro_reg=$_GET['id'];      
    $sql = "select * from product as p where p.productid = \"$id\"";
    $result = mysqli_query($conn, $sql);
                                }

        if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
        $id = $row['productid'];
        $product_name = $row['product_name'];
        $price = $row['product_price'];
        $qty = $row['product_qty'];    
        $photo = $row['photo'];
        $description = $row['description'];
        $tech = $row['tech'];
        $video = $row['video'];
        $category_name = $row['category_name'];
    }
        } else {
    echo "Lo sentimos no existe detalle de este producto por el momento";
        }
        ?>
        <br>
        <div class="col-xs-12"><hr></div>
        <h1><?php echo $product_name; ?></h1>
        <h8><a href="index.php" style="color: green"> Home </a> > <a href="" style="color: green"><?php echo $category_name; ?></a> > <a style="color: gray"><?php echo $product_name; ?></a></h8>
   
        <hr>
    <div class="row">
        <div class="col-sm-5">
                         
       <div class="bs-example">
       	<div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
       	<?php 
       	$sql2 = "select * from carousel as c where c.productid = \"$id\"";
    	$result2 = mysqli_query($conn, $sql2);
    	if ($rs = mysqli_fetch_array($result2)) {
    		echo '<img style="width:70%; height:100%;" src=POS/admin/'.$rs["1"].' class="big-img">';}
       	?>
       </div>
       </div>
       
       <div class="col-md-12 cont-imgs" style="margin-top: 5px;">
       	<div class="form-inline">
       		<div class="form-group">
       	<?php  
       	foreach ($result2 as $rst) {
       	echo '<button class="lit-img" value='.$rst["photo"].'><img src=POS/admin/'.$rst["photo"].' style="width:60px;height:60px;"></button>';
       		}
       	?>
       	</div>
        </div>
   		</div>
   		</div>
              
                <div class="col-sm-4" style="background-color:#ffffff; border:1px solid; border-radius:5px;">
<!--        <h1 style="color: #00d361">₡<?php echo number_format($price,2); ?></h1>-->
       <h1 style="color: #00d361">Coming soon</h1>
        <hr>
        <a style="color: gray"><?php echo $product_name; ?></a>
        <hr>
        <br>
        <div>
            <br>
            
<form class="form-inline" id="envCart">
  <div class="form-group">
    <input id="idp" type="hidden" value="<?php echo $id; ?>" >
    <label for="qty">Qty:</label>
    <input type="number" style="width:80px;height:30x" class="form-control" id="qty" min="0" step="1" onchange="valid()">
    <button type="submit" class="btn btn-success disabled" required style="margin-left:5px;" disabled="true" id="btnCart">Add to Cart</button>
    <div id="divani"></div>
  
  </div>
    <br>  
    <br>       
  
</form>  
                
                  
            </div>
        </div>
        </div>
        <div class="row">

        </div>
 <div style="height: 50px;"></div>
              <hr> 
        
            <br>
<div class="descripcion" style="background-color:#ffffff; border:1px solid; border-radius:5px; padding-left:20px">

<ul id="clothing-nav" class="nav nav-tabs" role="tablist" >
	
<li class="nav-item">
<a class="nav-link active" href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true" style="color:black">Description</a>

</li>

<li class="nav-item">
<a class="nav-link" href="#hats" role="tab" id="hats-tab" data-toggle="tab" aria-controls="hats" style="color:black">Tech Specs</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#video" role="tab" id="hats-tab" data-toggle="tab" aria-controls="hats" style="color:black">Videos</a>
</li>
            
</ul>

<!-- Content Panel -->
<div id="clothing-nav-content" class="tab-content">

<div role="tabpanel" class="tab-pane fade show active" id="home" aria-labelledby="home-tab">
  <h3> Name: <?php echo $product_name; ?></h3>
    <hr>
    <?php
$des1 = str_replace("\n", "<br>", $description);
    ?>
  <p><?php echo $des1; ?></p>

</div>

<div role="tabpanel" class="tab-pane fade" id="hats" aria-labelledby="hats-tab">
<?php
$tech1 = str_replace("\n", "<br>", $tech);
    ?>
    <p><?php echo $tech1; ?></p>
    
</div>

<div role="tabpanel" class="tab-pane fade" id="video" aria-labelledby="hats-tab">
    <br>
    <p style="text-align:center"><?php echo $video; ?></p>
</div>
  <br>
</div>
</div>
      </div>
      </div>    
      
        
    <!-- /.container -->
            
 <!-- Footer -->
         
     <?php include './inc/footer.php'; ?>  

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
      function valid(){
        if($("#qty").val() != ""){$("#btnCart").attr("disabled",false);}else{$("#btnCart").attr("disabled",true);}
      }
      $("#envCart").submit(function(e){
        e.preventDefault();
        var newP = $("<div>");
        newP.html('<img style="height: 70px; width: 70px;border-radius:50px" alt="First slide image" src="POS/admin/<?php echo $photo ?>"/>');
        newP.addClass("slide-tr");
        // append prepend after
        $("#divani").append(newP);
        setTimeout(function() {
        $("#divani").empty();
        var param = {"idp":$("#idp").val(),"qty":$("#qty").val()}
        $.ajax({
          url:"add_cart.php",
          data:param,
          success:function(){
          $("#Cont-Popover").load("PopOver.php");
          swal({
          title: 'Se agrego al carro de compras',
          type: 'success',
          showCancelButton: true,
          confirmButtonColor: '#409814',
          confirmButtonText: 'Ir al carrito',
          cancelButtonText: 'Seguir comprando',
        },function(){
        window.location.href = "fetch_cart.php";  
        }); 
          }
        });
        },1000);
      });
      $(".lit-img").on("click",function(){
      	var img = $('<img style="width:70%; height:100%;" src=POS/admin/'+$(this).val()+' class="big-img">');
      	$(".bs-example").empty();
      	$(".bs-example").append(img);
      });
    </script>
  </body>
    
</html>