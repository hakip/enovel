<?php
	$arr = '<div class="modal-header">
	        <h5 class="modal-title" id="newrecordLabel">Edit Chapter</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form method="POST" action="chapter_update">
		        <input type="hidden" name="id" value="'.$chapter['id'].'">
		        <div class="form-group">
					    <label>Title</label>
					    <input type="string" name="ten" value="'.$chapter['ten'].'" class="form-control" placeholder="Enter Title" required>
					  </div>
					  <div class="form-group">
					    <label>Content</label>
					    <textarea name="noidung" class="form-control" placeholder="Enter Content" required rows="5">'.$chapter['noidung'].'</textarea>
					  </div>
					  <div class="form-group">
							    <label>Novel</label>
							    <div class="input-group mb-3">
							    <select name="truyen_id" class="custom-select" required>';
		while ($row = mysqli_fetch_array($novels)) {
			  $arr = $arr.'<option value="'.$row['id'].'" '.(($chapter['truyen_id'] == $row['id'])?'selected':"").'>'.$row['ten'].' - '.$row['tentacgia'].'</option>';
		}			  
		$arr = $arr.	'</select>
									</div>
							  </div>
					 
					  <hr/>
					  <button type="submit" class="btn btn-outline-primary">Submit</button>
					</form>
	      </div>';
	  echo $arr;
	      // ten, noidung, ngaytao, ngaysua, truyen_id
?>