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
	public function register($user)
	{
		$sql = "INSERT INTO nguoidung(hoten,email,matkhau,quyen) VALUES('".$user['hoten']."','".$user['email']."','".$user['matkhau']."','".$user['quyen']."')";
		return mysqli_query($this->conn,$sql);
	}
	public function get_user_by_email($email)
	{
		$sql = "SELECT * FROM nguoidung WHERE email = '$email' OR id ='$email'";
		return mysqli_query($this->conn,$sql);
	}
	public function login($email,$password)
	{
		$sql = "SELECT * FROM nguoidung WHERE email = '$email' and matkhau = '$password'";
		return mysqli_query($this->conn,$sql);
	}
	function addNew($id, $password, $email, $optional){
		//optinal array: ("$info"=>"info_type", "$info"=>"info_type") for ex: ("Alice"=>"Name")
		//for password, hash and store the hash only. May need to include library.
	}
	function forgetPassword($user)
	{
		$sql = "UPDATE nguoidung SET matkhau = '".$user['matkhau']."' WHERE id = '".$user['id']."'";
		return mysqli_query($this->conn,$sql);
	}
	function edit($user){
		$sql = "UPDATE nguoidung SET matkhau = '".$user['matkhau']."',hoten = '".$user['hoten']."' WHERE id = '".$user['id']."'";
		return mysqli_query($this->conn,$sql);
	}
	function subscribe($id, $novel_name){

	}
	function unsubscribe($id, $novel_name){

	}
	function getInfo($id){

	}
	//If possible
	function deleteAccount($id){

	}
}
?>