
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
    <div class="modal fade" id="editprod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit Product</h4></center>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        
                        <div style="height:10px;"></div>
                        <form id="form_edit" method="" action="" enctype="multipart/form-data">
                            <input type="hidden" name="query" value="0">
                            <input type="hidden" name="edit_id" id="edit_id">
                            <div class="form-group input-group">
                                <span class="input-group-addon" style="width:120px;">Product Name:</span>
                                <input type="text" style="width:400px; text-transform:capitalize;" value="" class="form-control" name="edit_name" id="edit_name">
                            </div>
                            <div style="height:10px;"></div>
                            <div class="form-group input-group">
                                <span class="input-group-addon" style="width:120px;">Category:</span>
                                <select style="width:400px;" class="form-control" name="edit_category" id="edit_category">
                            
                                </select>
                            </div>
                            <div style="height:10px;"></div>
                            <div class="form-group input-group">
                                <span class="input-group-addon" style="width:120px;">Supplier:</span>
                                <select style="width:400px;" class="form-control" name="edit_supplier" id="edit_supplier">
                                    
                                </select>
                            </div>
                            <div style="height:10px;"></div>
                            <div class="form-group input-group">
                                <span class="input-group-addon" style="width:120px;">Price:</span>
                                <input type="text" style="width:400px;" value="" class="form-control" name="edit_price" id="edit_price">
                            </div>
                            <div style="height:10px;"></div>
                            <div class="form-group input-group">
                                <span class="input-group-addon" style="width:120px;">Quantity:</span>
                                <input type="text" style="width:400px;" value="" class="form-control" name="edit_stock" id="edit_stock">
                            </div>
                            <div style="height:10px;"></div>					
                            <div class="form-group input-group">
                                <span class="input-group-addon" style="width:120px;">Photo:</span>
                                <input type="file" style="width:400px;" class="form-control" name="image" accept="image/*">
                            </div>
                            <div style="height:20px;"></div>
                            <div class="form-group">
                            <label for="exampleTextarea">Description</label>
                            <br>
                            <textarea class="form-control" name="edit_description" id="edit_description" cols="70" rows="10"></textarea>
                            </div> 
                            <div class="form-group">
                            <label for="exampleTextarea">Tech Specs</label>
                            <br>
                            <textarea class="form-control" name="edit_tech" id="edit_tech" cols="70" rows="10"></textarea>
                            </div> 
                            <div class="form-group">
                            <label for="exampleTextarea">Video</label>
                            <br>
                            <textarea class="form-control" name="edit_video" id="edit_video" cols="70" rows="10"></textarea>
                            </div>
                            <div style="height:10px;"></div>
                  
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                            <button onclick="updateProduct()" type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Update</button>
                        </div>
                    </form>
                </div>
                </div>

        </div>
</div>
</div>

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
 