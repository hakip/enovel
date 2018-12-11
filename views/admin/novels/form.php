<?php
	echo '<div class="modal-header">
	        <h5 class="modal-title" id="newrecordLabel">Create Novel</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form method="POST" action="novel_create" onsubmit="return checkURL(this)">
		        <div class="form-group">
					    <label>Title</label>
					    <input type="string" name="ten" class="form-control" placeholder="Enter Title" required>
					  </div>
					  <div class="form-group">
					    <label>URL Image</label>
					    <input type="string" name="url_anh" class="form-control" placeholder="Enter URL Image" required>
					  </div>
					  <div class="form-group">
					    <label>Description</label>
					    <input type="text" name="mota" class="form-control" placeholder="Enter Description" required>
					  </div>
					  <div class="form-group">
					    <label>Status</label>
					    <div class="input-group mb-3">
							  <select name="trangthai" class="custom-select">
							    <option value="0">Inactive</option>
							    <option value="1" selected>Active</option>
							  </select>
							</div>
					  </div>
					  <div class="form-group">
					    <label>Author</label>
					    <input type="string" name="tentacgia" class="form-control" placeholder="Enter Author" required>
					  </div>
					  <hr/>
					  <button type="submit" class="btn btn-outline-primary">Submit</button>
					</form>
	      </div><script>
	      	function checkURL(cThis) {
	      		url = $(cThis).find("input[name='."'url_anh'".']")[0].value;
	      		if(url.match(/\.(jpeg|jpg|gif|png)$/) != null){
	      			return true;
	      		}else{
	      			alert("Your URL image was wrong!");
	      			return false;
	      		}
				}
	      </script>';
	      //url_anh, ten, mota, ngaytao, trangthai, tentacgia
?>