 <?php include('inc/conn.php'); ?>
<html>
         <style>
         
  .card-columns .card {
  display: inline-block;
  width: 100%;
}

.card-img-top {
  width: 100%;
  height: 200px !important; //esta es la parte importante para que todas tus card-img tengan la misma medida sin importar el tamaño de la imagen
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}
  </style>
<body>

  
  <?php
     $consulta=mysql_query("SELECT * from product where categoryid =1");
     while($filas=mysql_fetch_array($consulta)){
         $id=$filas['productid'];
         $name=$filas['product_name'];
         $photo=$filas['photo'];
         
     ?>
 <!--<div class="card-columns">
     <div class="card" style="width: 18rem;">
         <img class="card-img-top" src="<?php echo $photo; ?>" alt="Card image cap">
         <div class="card-body">
         <h5 class="card-title"></h5>
         <p class="card-text"></p>
         <a href="#" class="btn btn-primary"><?php echo $name; ?></a>
         </div>
     </div>
 </div>  -->     
       <div class="card-columns">
  <div class="card">
    <img class="card-img-top img-fluid" src="<?php echo $photo; ?>" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title"></h4>
      <p class="card-text"></p>
         <div class="card-footer">
              <a href="#" class="btn btn-success"><?php echo $name; ?></a>
            </div>
    </div>
  </div>
    </div>
  
  <?php }?>
 
  

</body>
</html>
