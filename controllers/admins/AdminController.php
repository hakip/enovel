<?php
	require_once('models/user_model.php');
	/**
	 * 
	 */
	class AdminController
	{
		public function checkSession(){
			$email = isset($_POST['email'])? $_POST['email']: '';
			$password = isset($_POST['password'])? $_POST['password']: '';
			$usermodel = new UserModel();
			$admin = $usermodel->login($email, $password );
			if(mysqli_fetch_assoc($admin))
      {
          $_SESSION['Admin']=$_POST['email'];
          header("location:admin/dashboard");
      }
      else
      {
          header("location:login");
      }
		}
	}
?>