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