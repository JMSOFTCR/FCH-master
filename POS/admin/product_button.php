
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>


  <link href="../css/alertify.css" rel="stylesheet">
<!-- Delete Product -->
    <div class="modal fade" id="delproduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <!-- <input type="text" value="< ?php echo $pid; ?>" -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete Product</h4></center>
                </div>
                <div class="row message"></div>
                <form role="form" method="" action="">
                    <input type="hidden" name="idProdDelete" id="idProdDelete">
                    <input type="hidden" name="nameProd" id="nameProd">
                    <div class="modal-body">
                        <div class="container-fluid data"> <!-- Pintaremos el ombre y una foto -->
                                       
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- /.modal -->
  
<!-- Edit Product -->
    <div class="modal fade" id="editprod_<?php echo $pid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit Product</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$a=mysqli_query($conn,"select * from product left join category on category.categoryid=product.categoryid left join supplier on supplier.userid=product.supplierid where productid='$pid'");
						$b=mysqli_fetch_array($a);
					?>
					<div style="height:10px;"></div>
                    <form role="form" method="POST" action="edit_product.php<?php echo '?id='.$pid; ?>" enctype="multipart/form-data">
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Product Name:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" value="<?php echo ucwords($b['product_name']); ?>" class="form-control" name="name">
                        </div>
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Category:</span>
                            <select style="width:400px;" class="form-control" name="category">
								<option value="<?php echo $b['categoryid']?>"><?php echo $b['category_name']; ?></option>
								<?php
									$c=mysqli_query($conn,"select * from category where categoryid != '".$b['categoryid']."'");
									while($crow=mysqli_fetch_array($c)){
										?>
											<option value="<?php echo $crow['categoryid']; ?>"><?php echo $crow['category_name']; ?></option>
										<?php
									}
								?>
							</select>
                        </div>
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Supplier:</span>
                            <select style="width:400px;" class="form-control" name="supplier">
								<option value="<?php echo $b['supplierid']?>"><?php echo $b['company_name']; ?></option>
								<?php
									$s=mysqli_query($conn,"select * from supplier where userid != '".$b['supplierid']."'");
									while($srow=mysqli_fetch_array($s)){
										?>
											<option value="<?php echo $srow['userid']; ?>"><?php echo $srow['company_name']; ?></option>
										<?php
									}
								?>
							</select>
                        </div>
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Price:</span>
                            <input type="text" style="width:400px;" value="<?php echo $b['product_price'] ?>" class="form-control" name="price">
                        </div>
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Quantity:</span>
                            <input type="text" style="width:400px;" value="<?php echo $b['product_qty'] ?>" class="form-control" name="qty">
                        </div>
						<div style="height:10px;"></div>					
						<div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Photo:</span>
                            <input type="file" style="width:400px;" class="form-control" name="image">
                        </div>
                        <div style="height:20px;"></div>
                        <div class="form-group">
                        <label for="exampleTextarea">Description</label>
                        <br>
                        <textarea class="form-control" name="description" cols="70" rows="10"><?php echo $b['description'] ?></textarea>
                        </div> 
                        <div class="form-group">
                        <label for="exampleTextarea">Tech Specs</label>
                        <br>
                        <textarea class="form-control" name="tech" cols="70" rows="10"><?php echo $b['tech'] ?></textarea>
                        </div> 
                        <div class="form-group">
                        <label for="exampleTextarea">Video</label>
                        <br>
                        <textarea class="form-control" name="video" cols="70" rows="10"><?php echo $b['video'] ?></textarea>
                        </div>
						<div style="height:10px;"></div>
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Update</button>
					</form>
                </div>
        </div>
</div>
</div>

 <!-- add photo -->
 
<!-- <div class="modal fade" id="addphoto_< ?php echo $pid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add Product</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					< ?php
						$a=mysqli_query($conn,"select * from product left join category on category.categoryid=product.categoryid left join supplier on supplier.userid=product.supplierid where productid='$pid'");
						$b=mysqli_fetch_array($a);
					?>
				
                   
                            
                            <form onsubmit="return false" class="oculto" method="post" enctype="multipart/form-data" id="formUpload">
	                        <input type="file" name="image" onchange="upload_img();">
                            <input type="submit" value="Upload" class="submit" />

                            
                              <div style="height:10px;"></div>					
                                <div class="form-group input-group">
                                <span class="input-group-addon" style="width:120px;">Photo:</span> 
                                <input type="file" style="width:400px;" class="form-control" name="file" id="file" multiple="" accept="image/*" />
                                <input type="submit" value="Upload" class="submit" />
                                </div>
                             
                               
                         <div class="col-sm-10">
						
                                   

                                   
						< ?php 
                                      
                                   $sql = "select * from carousel as c where c.productid = '$pid'"; 
                                    $result = mysqli_query($conn, $sql);
                                
                                                               

                                        if(mysqli_num_rows($result) > 0){
                                        while($row = mysqli_fetch_array($result)){
                                        $id = $row['idphoto'];
                                        $photo = $row['photo'];
                                       
                                              for($i=0; $i < count($photo); $i++){
                                
                                   
                
                                        
                                        echo "<img src='$photo' width=200px  />";
                                    
                                       echo " 
                                       
                                         <a class='btn btn-danger glyphicon glyphicon-remove' href='del_file.php/?service=$id&service2=$photo'>Borrar</a>
                                      
                                       ";                                    } 

                                    }
                                     
                                    }
                                   
                                    
                                        
                                   ?>
                
    		   
                          
						
	
					</div>                     
				
            
    		  
                                
                            
                       <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="submit btn btn-success"><i class="fa fa-check-square-o"></i> Add Photo</button>
					</form>
                </div>
                        
				</div>
			
				</div>
                
        </div>
</div>
</div>
 -->
<!--<script>
function upload_img(){

	var formData = new FormData($("#formUpload")[0]);
	$.ajax({
	type: 'POST',
	url: 'addphoto.php',
	data: formData,
	contentType: false,
	processData: false
	});

}
</script>-->
 
  <div class="modal fade" id="addphoto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Image Gallery</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                   
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<div class="message"></div>
					<div style="height:10px;"></div>
                    <form role="form" id="savePhotoProd" enctype="multipart/form-data">
                            
                        <div style="height:10px;"></div>
                        <input type="hidden" name="idProd" id="idProd">
                        <input type="hidden" name="getPhoto" value="0">					
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Photo:</span> 
                            <input id="photo" type="file" style="width:400px;" class="form-control" name="archivo" accept="image/*" required />
                        </div>
                        
                    <div class="container">
                        <div class='d-flex flex-wrap p-4 images'> 
                          
						<!-- < ?php 
                                      
                            $sql = "select * from carousel as c where c.productid = '$pid'"; 
                            $result = mysqli_query($conn, $sql);
                        
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                    $id = $row['productid'];
                                    $photo = $row['photo'];
                                    $count = mysqli_num_rows($result);
                                   
                                    echo "
                                        <img class='m-3'src='../$photo' width='200' height='200' />
                                        <a class='btn btn-danger glyphicon glyphicon-remove' href='del_file.php/?service=$id&service2=$photo'><i class='fa fa-trash'></i></a>
                                        ";
                                }
                            }    
                            /* 
                                Hacer un apeticion ajax de consulta cuando se apreta el boton para add Photo y otra para cuando se debe guardar y al mismo tiempo se refresca con una nueva consulta 
                            */
                        ?> -->
                        </div>
					</div>                     
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                        <button id="savePhoto" type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Add Photo</button>
                    </div>

                    </form>
				</div>
			
				</div>
                
        </div>
</div>
</div>

