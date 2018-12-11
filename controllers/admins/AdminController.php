<?php
	require_once('models/user_model.php');
	/**
	 * 
	 */
	class AdminController
	{
		public function login(){
			$email = isset($_POST['email'])? $_POST['email']: '';
			$password = isset($_POST['password'])? $_POST['password']: '';
			if ($email != '' && $password != '') {
				$usermodel = new UserModel();
				$admin = $usermodel->admin_login($email, $password );
				if($admin)
	      {
					session_start();
          $_SESSION['Admin']=$_POST['email'];
          header("location:dashboard");
	      }
	      else
	      {
          header("location:index");
	      }
			}
			else {
				require_once('./views/admin/login.php');
			}
		}

		public function checkSession(){
			require_once('./views/admin/dashboard.php');
		}

		public function logout(){
			session_start();
			session_destroy();
			header("location:index");
		}
	}
?>