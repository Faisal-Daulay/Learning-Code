

		<!-- Modal -->
		<!-- <form action="?hal=upload/upload.php" method="post" enctype="multipart/form-data"> -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Upload File</h4>
					</div>
			      	<div class="modal-body">
						<div class="form-group">
							<input type="file" name="files" multiple>
						</div>
						<div class="dropzone" id="dropzone">
							Just drag and drop files here
						</div>
						<div id="upload">
							<img id="myshow" src="" width="200">
						</div>
					</div>
					<div class="modal-footer">
						<input type="submit" class="btn btn-default" data-dismiss="modal" value="Cencel">
						<input type="submit" class="btn btn-default" value="Save" id="js-upload-submit">
					</div>
			    </div>
			  </div>
			</div>
		<!-- </form> -->