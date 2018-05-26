<?php 
session_start();
  if(isset($_SESSION["Array"])) {
  include "conn.php"; 
    foreach ($_SESSION["Array"] as $row) {
      $query=mysqli_query($conn,"select * from product where productid = \"$row[idp]\"");
      while($rw = mysqli_fetch_array($query)){
      ?>
      <div class="conten">
      <div class="row">
        <form class="form-inline">
        <div class="form-group">
          <img src="POS/<?php if (empty($rw['photo'])){echo "upload/noimage.jpg";}else{echo $rw['photo'];} ?>" style="width: 40px; height:40px;margin-top:5px;margin-left:20px;margin-right:10px;">
          <span> <?php echo $rw['product_name']; ?></span>
          <button style="margin-right:10px;margin-left:5px;" type="button" class="btn btn-warning btn-sm minus_qty_p" value="<?php echo $rw['productid']; ?>"><i class="fa fa-minus fa-fw"></i></button> 
        <div class="qty_cart_<?php echo $rw['productid'];?>">
          <span><strong><?php echo $row['qty']; ?></strong></span>
        </div>
          <button style="margin-left:10px;margin-right:15px;" type="button" class="btn btn-primary btn-sm add_qty_p" value="<?php echo $rw['productid']; ?>"><i class="fa fa-plus fa-fw"></i></button>
          <button type="button" class="btn btn-danger btn-sm remove_product_p" value="<?php echo $rw['productid']; ?>"><i class="fa fa-times fa-fw"></i></button>  
      </div>
       </form>
      </div>
      </div>
      <?php
    }
    } echo '<br><a class="bnt bnt-md btn-info" href="fetch_cart.php" type="submit">Check Out</a>';         
  }else{echo "No hay productos en su carro de compras";}?>
  <script type="text/javascript">
  $(".remove_product_p").on("click",function(){
        var id = {"idp":$(this).val()}
        $.ajax({
          url:"remove_cart.php",
          data:id,
          success:function(){
            $("#Cont-Popover").load("PopOver.php");
            setTimeout(function() {
            $('[data-toggle="popover"]').popover("hide");
            $('[data-toggle="popover"]').popover("show");},500);
          }
        });
      });
  $(".add_qty_p").on("click",function(){
        var id = {"idp":$(this).val()}
        var rec = $(this).val();
        $.ajax({
          url:"more_cart.php",
          data:id,
          success:function(data){
            $(".qty_cart_"+rec+"").html("<span><strong>"+data+"</strong></span>");
            $('[data-toggle="popover"]').popover("hide");
            $('[data-toggle="popover"]').popover("show");
          }
        });
      });
  $(".minus_qty_p").on("click",function(){
        var id = {"idp":$(this).val()}
        var rec2 = $(this).val();
        $.ajax({
          url:"less_cart.php",
          data:id,
          success:function(data){
            if(data ==-1){
              setTimeout(function() {
            $('[data-toggle="popover"]').popover("hide");
            $('[data-toggle="popover"]').popover("show");},500);}else{$(".qty_cart_"+rec2+"").html("<span><strong>"+data+"</strong></span>");$('[data-toggle="popover"]').popover("hide");
            $('[data-toggle="popover"]').popover("show");}
            }
        });
      });
</script>