
<!-- Delete Product -->
    <div class="modal fade" id="delproduct_<?php echo $pid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete Product</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$a=mysqli_query($conn,"select * from product where productid='$pid'");
						$b=mysqli_fetch_array($a);
					?>
                    <h5><center>Product Name: <strong><?php echo $b['product_name']; ?></strong></center></h5>
					<form role="form" method="POST" action="deleteproduct.php<?php echo '?id='.$pid; ?>">
                </div>                 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
					</form>
                </div>
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit Product -->
    <div class="modal fade" id="editprod_<?php echo $pid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
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
    <div class="modal fade" id="addphoto_<?php echo $pid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
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
                    <form role="form" method="POST" action="addphoto.php<?php echo '?id='.$pid; ?>" enctype="multipart/form-data">
                            
                              <div style="height:10px;"></div>					
                                <div class="form-group input-group">
                                <span class="input-group-addon" style="width:120px;">Photo:</span> 
                                <input type="file" style="width:400px;" class="form-control" name="archivo[]" multiple="" accept="image/*" />
                                </div>
                                
                               <div class="col-sm-10">
						
						<?php 
							$path = "files/".$pid;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
										echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' title='Ver Archivo Adjunto'><span class='glyphicon glyphicon-picture'></span></a>";
										echo "$archivo <a href='del_file.php' class='delete' title='Ver Archivo Adjunto' ><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a></div>";
										echo "<img src='files/$pid/$archivo' width='300' />";
									}
								}
							}
							
						?>
						
					</div>                 
                               
                        
                                
                            
                       <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Add Photo</button>
					</form>
                </div>
                        
				</div>
			
				</div>
                
        </div>
</div>
</div>

<script type="text/javascript">
			$(document).ready(function() {
				$('.delete').click(function(){
					var parent = $(this).parent().attr('pid');
					var service = $(this).parent().attr('data');
					var dataString = 'pid='+service;
					
					$.ajax({
						type: "POST",
						url: "del_file.php",
						data: dataString,
						success: function() {			
							location.reload();
						}
					});
				});                 
			});    
		</script>

<!-- add photo -->
                            
                     
<!-- /add photo -->
