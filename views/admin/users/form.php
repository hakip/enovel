<?php
	echo '<div class="modal-header">
	        <h5 class="modal-title" id="newrecordLabel">Create User</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form method="POST" action="user_create">
		        <div class="form-group">
					    <label for="exampleInputEmail1">Full name</label>
					    <input type="name" name="fullname" class="form-control" placeholder="Enter full name" required>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" name="email" class="form-control" placeholder="Enter email" required>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" name="password" class="form-control" placeholder="Password" required>
					  </div>
					  <button type="submit" class="btn btn-outline-primary">Submit</button>
					</form>
	      </div>';
?>