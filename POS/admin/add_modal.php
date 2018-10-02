
<script src="js/ajax_producto.js" charset="utf-8"></script>
<script src="js/sweetAlert.min.js" charset="utf-8"></script>
<!-- Add Product -->
   <div class="modal fade" id="addproduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New Product</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
                    <form method="POST" id="formAddProduct" data-locked="false" >
                      <input type="hidden" id="id" name="id" >
						<div class="container-fluid">
						<div style="height:15px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Name:</span>
                            <input id="name_p" type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="name" required>
                        </div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Category:</span>
                            <select style="width:400px;" id="category_p" class="form-control" name="category">
								<?php
									$cat=mysqli_query($conn,"select * from category");
									while($catrow=mysqli_fetch_array($cat)){
										?>
											<option value="<?php echo $catrow['categoryid']; ?>"><?php echo $catrow['category_name']; ?></option>
										<?php
									}
								?>
							</select>
                        </div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Supplier:</span>
                            <select style="width:400px;" class="form-control" id="supplier_p" name="supplier">
								<?php
									$sup=mysqli_query($conn,"select * from supplier");
									while($suprow=mysqli_fetch_array($sup)){
										?>
											<option value="<?php echo $suprow['userid']; ?>"><?php echo $suprow['company_name']; ?></option>
										<?php
									}
								?>
							</select>
                        </div>
                        <div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Price:</span>
                            <input type="text" style="width:400px;" class="form-control" id="price_p" name="price" required>
                        </div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Quantity:</span>
                            <input type="text" style="width:400px;" class="form-control" id="qty_p" name="qty">
                        </div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Main Photo:</span>
                            <input type="file" style="width:400px;" accept="*/*" class="form-control" id="image_p" name="image">
                        </div>
                        <div class="form-group">
                        <label for="exampleTextarea">Description</label>
                        <textarea class="form-control" name="description" id="description_p" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                        <label for="exampleTextarea">Tech Specs</label>
                        <textarea class="form-control" name="tech" id="tech_p" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                        <label for="exampleTextarea">Video</label>
                        <textarea class="form-control" id="video_p" name="video" rows="10"></textarea>
                        </div>
						</div>
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
					</form>
                </div>
			</div>
		</div>
</div>
