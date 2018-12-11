<?php
class UserModel{
	//Models connect to database, get data then return to controllers.
	//Models only run on getting called from controllers. Models don't directly change views.
	//Models don't check sessions nor store session informations.
	public $conn;
	function __construct(){
		global $servername;
		global $username;
		global $password;
		global $dbname;
		require_once('./config.php');
		$this->conn = mysqli_connect($servername, $username, $password, $dbname)
			or die("Lỗi kết nối cơ sở dữ liệu");
	}
}
?>