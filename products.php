<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FCHMAINTENANCE - </title>

    <link href="vendor/bootstrap/css/footer.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/card.css" rel="stylesheet">
    <link rel="stylesheet" href="POS/admin/css/custom.css">

</head>
<body>
     <!-- Navigation -->
    <?php 
        include './inc/nav.php';
        require_once('conn.php');

        $cat = intval($_GET['cat']); // resivimos la categoria de la url al presionar la categoria deseada, y solo seasn nums
        $sqlCat = "SELECT * FROM category WHERE categoryid = $cat";
        $sqlCount = "SELECT * FROM product WHERE categoryid = $cat";
        $title = null;
        $resultCat = mysqli_query($conn,$sqlCat);
        $resultCount = mysqli_query($conn,$sqlCount);
        $Total = mysqli_num_rows($resultCount);

        if($resultCat){
            $title = mysqli_fetch_array($resultCat);
            $title = $title['category_name'];
        }
        else{
             $title = "Error categoria no existe";
        }
    ?>
    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div style="height: 30px;"></div>
        <h1 class="mt-4 mb-3">Advance<small>Equipment</small></h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a style="color: #000;" href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a style="color: #000;" href="equipment_seccion.php">New Equipment</a></li>
            <li class="breadcrumb-item active">Advance Equipment</li>
        </ol>  
		
        <div style="margin-bottom:60px;" class="list-products"></div>  
        <input type="hidden" id="cat" value="<?php echo $cat?>"> <!-- obtencion de idCat -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include './inc/footer.php'; ?>

    <!-- Bootstrap core JavaScript -->
    <script src="POS/js/list_prod_pag.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>