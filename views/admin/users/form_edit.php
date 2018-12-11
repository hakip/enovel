<?php
	echo '<div class="modal-header">
	        <h5 class="modal-title" id="newrecordLabel">Edit User</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form method="POST" action="user_update">
		        <input type="hidden" name="id" value="'.$user['id'].'">
		        <div class="form-group">
					    <label for="exampleInputEmail1">Full name</label>
					    <input type="name" name="fullname" class="form-control" placeholder="Enter full name" value="'.$user['hoten'].'" required>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" name="email" class="form-control" placeholder="Enter email" value="'.$user['email'].'" required>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">New password</label>
					    <input type="password" name="new_password" class="form-control" placeholder="New password">
					  </div>
					  <hr/>
					  <button type="submit" class="btn btn-outline-primary">Submit</button>
					</form>
	      </div>';
?>