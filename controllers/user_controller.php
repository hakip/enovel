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
						echo '<script language="javascript">';
						echo 'alert("Login success");';  
						echo 'window.location.href = "/enovel";';
						echo '</script>';	
						
					}
					else {
						echo '<script language="javascript">';
						echo 'alert("Error Password");';  
						echo '</script>';
					}		
				}
				else {
					echo '<script language="javascript">';
					echo 'alert("Account not exist, You need to register or check mail");';  
					echo 'window.location.href = "/enovel/user/login.php";';
					echo '</script>';
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
					echo '<script language="javascript">';
					echo 'alert("Register success");';  
					echo 'window.location.href = "/user/login";';
					echo '</script>';
				}
				else {
					echo '<script language="javascript">';
					echo 'alert("Account aldready register");';  
					echo 'window.location.href = "/enovel";';
					echo '</script>';
				}
			}
			else {
				echo '<script language="javascript">';
				echo 'alert("Please fill all of form ");';  
				echo '</script>';
			}
			
		
	}
	function forgetPassword()
	{
		if (isset($_POST['submit'])) {
			if ($_POST['email'] != "" && $_POST['password'] != "" ) {
				$usermodel = new UserModel();
				$r = mysqli_num_rows($usermodel->get_user_by_email($_POST['email']));
				if ($r!=0) {
					echo "<script> console.log('here'); </script>";
					$user = array(
						'email' => $_POST['email'],
						'matkhau' => md5($_POST['password'])
					);
					$usermodel->forgetPassword($user);
					echo '<script language="javascript">';
					echo 'alert("Change password success");';  
					echo 'window.location.href = "/user/login";';
					echo '</script>';
				}
				else {
					echo '<script language="javascript">';
					echo 'alert("Account not exist");';  
					echo '</script>';
				}
			}
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
					echo '<script language="javascript">';
					echo 'alert("Edit success");'; 
					echo 'window.location.href = "/enovel";'; 
					echo '</script>';
				}
				else {
					echo '<script language="javascript">';
					echo 'alert("Account not exist, you need to check email or register");'; 
					echo '</script>';
				}
			}
	}
	function addSubscript()
	{
		# code...
	}
	function subscribe(){

		if(!$_SESSION['nguoidung'])
		{
			echo '<script language="javascript">';
			echo 'alert("You must login first");';  
			echo 'window.location.href = "/enovel/user/login.php";';
			echo '</script>';
		}
			$usermodel = new UserModel();
			$sub = mysqli_num_rows($usermodel->get_subscript_by_id($_SESSION['nguoidung'])); // cot Tuong tac
			if ($sub != 0 ) {
				$subarray = mysqli_fetch_array($usermodel->get_subscript_by_id($_SESSION['nguoidung']));//tra ve mang tuong tac
				$_SESSION['tuongtac'] = $subarray['id'];
				echo $_SESSION['tuongtac'];
				exit();
				// while ($subarray) {
					
				// 	$namecomics = mysqli_fetch_array($usermodel->get_comic_by_id($subarray['truyen_id']));//tra ve mang truyen
				// 	$_SESSION['truyen'] = $namecomics['id'];
				// }				
				// $addS = array(
				// 	'id' => $sub['tuongtac'],
				// 	'truyen_id' => $_SESSION['truyen'],
				// 	'nguoidung_id' => $_SESSION['nguoidung'],
				// 	'tentruyen' => $q['ten']
				// );
				// $usermodel->subscribe($addS);
			}
		}
		

	function unsubscribe(){
		if (isset($_POST['submit'])) {
			$usermodel = new UserModel();
			$usermodel->unsubscribe($_SESSION['tuongtac']);
				echo '<script language="javascript">';
				echo 'alert("Delete Subscribe success");';  
				echo 'window.location.href = "/enovel/user/list_subscipt";';
				echo '</script>';
			}
		}
	
	}
?>