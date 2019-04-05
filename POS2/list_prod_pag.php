<?php

require_once ("../inc/conn.php");
include 'paginationProd.php'; //include pagination file

$num_page = (isset($_POST['page']) && !empty($_POST['page'])) ? $_POST['page'] : 1;
$per_page = intval($_POST['per_page']); // nos aseguramos que sea numero entero
$records = ($num_page - 1 )*$per_page;
$cat = intval($_POST['cat']);

$sqlCount = "SELECT * FROM product WHERE categoryid = $cat";
$sqlPag = "SELECT * FROM product WHERE categoryid = $cat ORDER BY product_price LIMIT $records,$per_page";  

$count_rows = mysqli_query($conn,$sqlCount); // sacamos la cantidad de filas de la consulta
$count = mysqli_num_rows($count_rows);
$total_pages = ceil($count / $per_page);
$adjacents = 4;

if($count <=0){
    json_encode(['error'=>true,'msg'=>'This category not contain products!']);
}
else{
    $result = mysqli_query($conn,$sqlPag);

    echo "<div id='A_Equipment' class='flex-container'>";
    while($row=mysqli_fetch_array($result)):
                
        $id=$row['productid'];
        $name=$row['product_name'];
        $price=$row['product_price'];
        $photo=$row['photo'];
    ?>          
            <!-- colored -->
            <div class="ih-item square colored effect4" >
                <a id="enviar">
                    <div class="img">
                    <img src="POS/<?php if (empty($photo)){echo " upload/noimage.jpg ";}else{echo $photo;} ?>" alt="img">
                    </div>

                    <div class="info">
                        <h3><?php echo $name ?></h3>
                        <h4>₡ <?php echo $price; ?></h4>
                        <form action="details.php?id=<?php echo $id; ?>" method="post" name="Detalle">
                        <input name="id_txt" type="hidden" value="<?php echo $id; ?>" />
                        <input name="Detalles" type="submit" value="Detalles" class="btn btn-info" />
                        </form>
                    </div>
                </a>
            </div>
            <!-- end colored -->
       <?php 
       endwhile; ?>  
    </div> <!-- End flex conatiner-->
    <div> <!-- Pagination -->
       <?= paginate($num_page, $total_pages, $adjacents); ?>
     </div>  
    <?php
}
?>