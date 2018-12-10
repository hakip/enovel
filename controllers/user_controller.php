<?php
class UserController {
	//Controllers call model for data, process data, import to view and then show view.
	//Controllers don't directly connect to database.
	//Sessions are temporary and will not be put to database nor models.
	//Controllers need to check session_id before further processes.
	//Router most of the time doesn't send any data. Get data via $_GET/POST, etc...
	function login(){
		if (isset($_POST['submit'])) 
			
			if ($_POST['email'] != "" && $_POST['password'] != "" ) {
				$usermodel = new UserModel();
				$r = mysqli_num_rows($usermodel->get_user_by_email($_POST['email']));
				if ($r!=0) {
					$row = mysqli_fetch_array($usermodel->get_user_by_email($_POST['email']));
					if ($row['matkhau'] == md5($_POST['password'])) {
						$_SESSION['nguoidung'] = $row['id'];
						echo "Đăng nhập thành công";
						
					}
					else {
						echo "Sai mật khẩu";
					}		
				}
				else {
					echo "Tài khoản không tồn tại";
				}
			}
		}

	function logout(){
		session_start();
    	session_destroy();
    	header("location:login.php");
	}
	public function register(){
		
		if (isset($_POST['submit'])) 
		
			if ($_POST['email'] != "" && $_POST['fullname'] != "" && $_POST['password'] != "" ) {
				$usermodel = new UserModel();
				$r = mysqli_num_rows($usermodel->get_user_by_email($_POST['email']));
				if ($r==0) {
					
					$user = array(
						'hoten' => $_POST['fullname'] , 
						'email' => $_POST['email'],
						'matkhau' => md5($_POST['password']),
						'quyen' => "member"
					);
					$usermodel->register($user);
					echo "Đăng kí thành công";
				}
				else {
					echo "Tài khoản bạn đã đăng kí rồi";
				}
			}
			else {
				echo "Chưa nhập đủ thông tin";
			}
			
		
	}
	function forgetPassword()
	{
		if (isset($_POST['submit'])) 
			if ($_POST['email'] != "" && $_POST['password'] != "" ) {
				$usermodel = new UserModel();
				$r = mysqli_num_rows($usermodel->get_user_by_email($_POST['email']));
				if ($r!=0) {
					$user = array(
						'email' => $_POST['email'],
						'matkhau' => md5($_POST['password'])
					);
					$usermodel->forgetPassword($user);
					echo "Đổi mật khẩu thành công";
				}
				else {
					echo "Tài khoản không tồn tại";
				}
			}
			else {
				echo "Chưa nhập đủ thông tin";
			}
	}
	function edit(){
		if (isset($_POST['submit'])) 
			
			if ($_POST['fullname'] != "" && $_POST['password'] != "" ) {
				$usermodel = new UserModel();
				$r = mysqli_num_rows($usermodel->get_user_by_email($_SESSION['nguoidung']));
				if ($r!=0) {
					$user = array(
						'id' => $_SESSION['nguoidung'],
						'hoten' => $_POST['fullname'],
						'matkhau' => md5($_POST['password'])
					);
					$usermodel->edit($user);
					echo "Chỉnh sửa thành công";
				}
				else {
					echo "Tài khoản không tồn tại";
				}
			}
			else {
				echo "Chưa nhập đủ thông tin";
			}
	}
	function subscribe(){

	}
	function unsubscribe(){

	}
	function getInfo($id){
		echo $id;
	}
	function removeList(){

	}
	//If possible
	function deleteAccount(){
	}
}
?>