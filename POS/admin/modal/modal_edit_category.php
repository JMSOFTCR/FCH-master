<div id="editCategoryModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="edit_category" id="edit_category">
					<div class="modal-header">						
						<h4 class="modal-title">Edit Category</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">	
					<div class="form-group">
							
							<input type="hidden" name="edit_id" id="edit_id" class="form-control" required>
						</div>				
						<div class="form-group">
							<label>Category name</label>
							<input type="text" name="edit_name" id="edit_name" class="form-control" required>
						</div>		
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div>

