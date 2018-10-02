<head>
    <link href="css/card.css" rel="stylesheet">
      
    <?php include('pospos/conn.php');
     $query=mysqli_query($conn,"select * from product ");  
    $nro_reg=mysqli_num_rows($query); 

    
      
    $reg_por_pagina=4; 
      
    @$nro_pagina=$_GET['num']; 
    
    if(is_numeric($nro_pagina))
        $inicio=($nro_pagina-1)*$reg_por_pagina;
        else 
        $inicio=0;
      
      
       $query=mysqli_query($conn,"select * from product order by product_name limit $inicio,$reg_por_pagina");  
      
      $can_paginas=ceil($nro_reg / $reg_por_pagina);
      ?>
        
  </head>

  <body>

    <!-- Navigation -->

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
    
<div class="container">

     <h1 class="mt-4 mb-3">Products
        <small></small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">All Products</li>
      </ol>

    
	<div style="height: 50px;"></div>
	<div> 
        
	<?php
		$inc=4;
		
		while($row=mysqli_fetch_array($query)){
            
         $id=$row['productid'];
         $name=$row['product_name'];
         $photo=$row['photo'];
			
			$inc = ($inc == 4) ? 1 : $inc+1; 
			if($inc == 1) echo "<div class='row'>";  
			
			?>
				<div class="col-lg-3">
                    
  <div class="card">
    <img class="card-img-top img-fluid" src="pospos/<?php if (empty($photo)){echo "upload/noimage.jpg";}else{echo $photo;} ?>" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title"></h4>
      <p class="card-text"></p>
         <div class="card-footer">
             <form action="details.php" method="post" name="Detalle"><input name="id_txt" type="hidden" value="<?php echo $id; ?>" /><input name="Detalles" type="submit" value="<?php echo $name; ?>" class="btn btn-success" /></form>
<!--              <a href="details.php?id=<?php echo $row['productid']; ?>" class="btn btn-success"><?php echo $name; ?></a>-->
            </div>
    </div>
  </div>
            
				</div>
			<?php
           
		if($inc == 4) echo "</div><div style='height: 30px;'></div>";
		}
		if($inc == 1) echo "<div class='col-lg-3></div><div class='col-lg-3'></div><div class='col-lg-3'></div></div>"; 
		if($inc == 2) echo "<div class='col-lg-3'></div><div class='col-lg-3'></div></div>"; 
		if($inc == 3) echo "<div class='col-lg-3'></div></div>"; 
	?>
	</div>
</div>
        <div style="height: 50px;"></div>
      <!-- Pagination -->
      <div align="center">
      <?php
          if($nro_pagina>1)
              echo "<a href='index.php?num=".($nro_pagina-1)."'> Anterior ></a> ";
              
       for ($i=1; $i<=$can_paginas; $i++){
           if ($i==$nro_pagina)
               echo $i." ";
           else 
               echo "<a href='index.php?num=$i'>$i</a> ";
       } 
          
          if($nro_pagina<$can_paginas)
               echo "<a href='index.php?num=".($nro_pagina+1)."'> Siguiente ></a> ";
          
       ?>
      </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->


    <!-- Bootstrap core JavaScript -->


  </body>
