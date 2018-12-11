<?php
	require_once('models/user_model.php');
	/**
	 * 
	 */
	class AdminUserController
	{
		public function index(){
			$usermodel = new UserModel();
			$users = $usermodel->a_index();
			$str = '<thead class="thead-dark">
			          <tr>
			            <th scope="col"><button class="btn btn-outline-secondary text-white" onclick="newRecord();" >New</button></th>
			            <th scope="col">Ho Ten</th>
			            <th scope="col">Email</th>
			            <th scope="col">Action</th>
			          </tr>
							</thead>
							<tbody>';
		  while ($row = mysqli_fetch_array($users)) {
		  	$str = $str. '<tr>
									      <th scope="row" name="id_user" data-id ='.$row{'id'}.'>'.$row{'id'}.'</th>
									      <td>'.$row{'hoten'}.'</td>
									      <td>'.$row{'email'}.'</td>
									      <td><a href="#" class="text-danger mr-3"><i class="fas fa-trash-alt" onclick= "delete_user(this);"></i></a><a href="#" class="text-info"><i class="fas fa-edit" onclick="edit_user(this);"></i></a></td>
									    </tr>';
			}
			$str = $str.'</tbody>';
			echo $str;
		}

		public function newrecord(){
			require_once('./views/admin/users/form.php');
		}

		public function createrecord(){
			$fullname = isset($_POST['fullname'])? $_POST['fullname']: '';
			$email = isset($_POST['email'])? $_POST['email']: '';
			$password = isset($_POST['password'])? $_POST['password']: '';
			$usermodel = new UserModel();
			$user = $usermodel->a_create_user($fullname, $email, $password);
			if ($user) {
				echo '<script>
								window.location.href = "dashboard#rel.in.user";
							</script>';
			}

		}

		public function deleterecord(){
			$id = isset($_POST['id'])? $_POST['id']: '';
			$usermodel = new UserModel();
			$result = $usermodel->a_delete_user($id);
			echo $result;
		}

		public function editrecord(){
			$id = isset($_POST['id'])? $_POST['id']: '';
			$usermodel = new UserModel();
			$result = $usermodel->a_get_user($id);
			$user = mysqli_fetch_array($result);
			require_once('./views/admin/users/form_edit.php');
		}

		public function updaterecord(){
			$id = isset($_POST['id'])? $_POST['id']: '';
			$fullname = isset($_POST['fullname'])? $_POST['fullname']: '';
			$email = isset($_POST['email'])? $_POST['email']: '';
			$current_password = isset($_POST['current_password'])? $_POST['current_password']: '';
			$new_password = isset($_POST['new_password'])? $_POST['new_password']: '';
			$usermodel = new UserModel();
			if ( $current_password == "" ) {
				$result = $usermodel->a_update_user($id, $fullname, $email, "");
			}else{
				$result = $usermodel->a_get_user($id);
				$user = mysqli_fetch_array($result);
				if ($user['matkhau'] == $current_password) {
					$result = $usermodel->a_update_user($id, $fullname, $email, $new_password);
				}else{
					$result = false;
				}
			}
			if ($result) {
				echo '<script>
								window.location.href = "dashboard#rel.in.user";
							</script>';
			}else{
				echo '<script>
								window.location.href = "dashboard#err.up.user";
							</script>';
			}
		}

	}
?>