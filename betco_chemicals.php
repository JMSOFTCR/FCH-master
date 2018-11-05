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

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/card.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->
    <?php include './inc/nav.php';
    include('conn.php');
     $query=mysqli_query($conn,"select * from product where categoryid = 17 order by product_name");  
      $nro_reg=mysqli_num_rows($query); 

      
    $reg_por_pagina=8; 
      
    $nro_pagina=$_GET['num']; 
    
    if(is_numeric($nro_pagina))
        $inicio=($nro_pagina-1)*$reg_por_pagina;
        else 
        $inicio=0;
        
       $query=mysqli_query($conn,"select * from product where categoryid = 17 order by product_name limit $inicio,$reg_por_pagina");  
      
      $can_paginas=ceil($nro_reg / $reg_por_pagina);
    ?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->


        <div style="height: 30px;"></div>
        <h1 class="mt-4 mb-3"> Green
            <small>Betco</small>
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a style="color: #000;" href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a style="color: #000;" href="equipment_seccion.php">Chemicals</a></li>
            <li class="breadcrumb-item active">Betco Chemicals</li>
        </ol>

        <div id="A_Equipment" class="flex-container">

            <?php
    		while($row=mysqli_fetch_array($query)){
                
             $id=$row['productid'];
             $name=$row['product_name'];
             $photo=$row['photo'];
    			?>

                <!-- colored -->
                <div class="ih-item square colored effect4">
                    <a id="enviar">
                        <div class="img">
                            <img src="POS/<?php if (empty($photo)){echo " upload/noimage.jpg ";}else{echo $photo;} ?>" alt="img">
                        </div>

                        <div class="info">
                            <h3>
                                <?php echo $name; ?>
                            </h3>
                            <h4>$
                                <?php echo $price; ?>
                            </h4>
                            <form action="details.php?id=<?php echo $id; ?>" method="post" name="Detalle">
                                <input name="id_txt" type="hidden" value="<?php echo $id; ?>" />
                                <input name="Details" type="submit" value="Details" class="btn btn-info" />
                            </form>
                        </div>
                    </a>
                </div>
                <!-- end colored -->
                <?php
            }
          ?>
        </div>

        <div style="height: 50px;"></div>
        <!-- Pagination -->
        <div align="center">
            <?php
       if($nro_pagina>1){
          echo "<a style='color:black;' href='betco_chemicals.php?num=".($nro_pagina-1)."'> Anterior ></a> ";
       }
       for ($i=1; $i<=$can_paginas; $i++)
       {
          if ($i==$nro_pagina){
               echo $i." ";
             }
           else{ 
               echo "<a style='color:black;' href='betco_chemicals.php?num=$i'>$i</a> ";
           }
       } 
       if($nro_pagina<$can_paginas){
           echo "<a style='color:black;' href='betco_chemicals.php?num=".($nro_pagina+1)."'> Siguiente ></a> "; 
       }
       ?>
        </div>
        <!--End Pagination -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include './inc/footer.php'; ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>