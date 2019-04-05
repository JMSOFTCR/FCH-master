<!-- <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css"> -->
<div id="editProductModal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form name="edit_product" id="edit_product">
                <div class="modal-header bg-info text-white">
                    <h4 class="modal-title">Edit Product</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="query" value="0">
                    <input type="hidden" name="edit_id" id="edit_id" class="form-control" required>
                    <div class="form-group">
                        <label>Product name</label>
                        <input type="text" name="edit_name" id="edit_name" class="form-control" required>
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon" style="width:120px;" >Category:</span>
                        <select style="width:400px;" class="form-control" name="edit_category" id="edit_category">
								<!-- <option value="edit_category" name="edit_category" id="edit_category"></option> -->
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
                        <select style="width:400px;" class="form-control" name="edit_supplier" id="edit_supplier">
								<option value="edit_supplier"></option>
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
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="edit_price" id="edit_price" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Stock</label>
                        <input type="number" name="edit_stock" id="edit_stock" class="form-control" required>
                    </div>

                    <div class="form-group jumbotron" id="currentPhoto">
                       
                    </div>
                    
                    <div class="form-group input-group">
                        <span style="width:120px;" class="input-group-addon">Photo:</span>
                        <input style="height:45px;" type="file" id="image" name="image" style="width:150px;" accept="image/*" class="form-control">
                    </div>
                    <div class="form-group input-group">
                        <span style="width:120px;" class="input-group-addon">PDF:</span>							
                        <input style="height:45px;" class="form-control" accept="*/*" type="file" name="pdf_edit" id="pdf_edit">
					</div>
        
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
                        <label for="exampleTextarea">Videos</label>
                        <br>
                        <textarea class="form-control" name="edit_video" id="edit_video" cols="70" rows="10"></textarea>
                    </div>
                    <div style="height:10px;"></div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-info" id="saveEdit" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>