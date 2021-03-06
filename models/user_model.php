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
	public function get_subscript_by_id($id)
	{
		$sql = "SELECT * FROM tuongtac WHERE nguoidung_id ='$id'";
		return mysqli_query($this->conn,$sql);
	}
	public function get_comic_by_id($id)
	{
		$sql = "SELECT * FROM truyen WHERE id ='$id'";
		return mysqli_query($this->conn,$sql);
	}
	public function a_login($email,$password)
	{
		$sql = "SELECT * FROM nguoidung WHERE email = '$email' and matkhau = '$password'";
		return mysqli_query($this->conn,$sql);
	}
	function forgetPassword($user)
	{
		$sql = "UPDATE nguoidung SET matkhau = '".$user['matkhau']."' WHERE email = '".$user['email']."'";
		return mysqli_query($this->conn,$sql);
	}
	function edit($user){
		$sql = "UPDATE nguoidung SET matkhau = '".$user['matkhau']."',hoten = '".$user['hoten']."' WHERE id = '".$user['id']."'";
		return mysqli_query($this->conn,$sql);
	}
	function subscribe($addS){
		$sql = "SELECT * FROM tuongtac WHERE truyen_id = '$comic_id' and nguoidung_id = '$user_id'";
		return mysqli_query($this->conn,$sql);
	}
	function unsubscribe($addS){
		$sql = "DELETE FROM tuongtac WHERE id = '$addS'";
		return mysqli_query($this->conn,$sql);
	}

	function admin_login($email, $password){
    $sql = 'SELECT * FROM `nguoidung` WHERE quyen = "admin" and email = "'.$email.'" and matkhau = "'.$password.'" ';
    $result = $this->conn-> query($sql);
    return $admin = mysqli_fetch_assoc($result);
	}

	function a_index(){
		$result = mysqli_query($this->conn, "SELECT id, hoten, email, matkhau FROM `nguoidung` WHERE quyen != 'admin' " );
		return $result;
	}

	function a_create_user($fullname, $email, $password){
		$sql = "INSERT INTO nguoidung(hoten,email,matkhau,quyen) VALUES('".$fullname."','".$email."','".$password."','user')";
		return mysqli_query($this->conn,$sql);
	}
	function a_delete_user($id){
		$deleteQuery = "DELETE FROM nguoidung WHERE id = '".$id."'";
		return mysqli_query($this->conn,$deleteQuery);
	}
	function a_get_user($id){
		$sql =  "SELECT id, hoten, email, matkhau FROM nguoidung WHERE id = '".$id."'";
		return mysqli_query($this->conn,$sql);
	}
	function a_update_user($id, $fullname, $email, $password){
		if ($password == "") {
			$sql = "UPDATE nguoidung SET hoten = '".$fullname."', email = '".$email."' WHERE id = '".$id."'";
		}else{
			$sql = "UPDATE nguoidung SET matkhau = '".md5($password)."', hoten = '".$fullname."', email = '".$email."' WHERE id = '".$id."'";
		}
		return mysqli_query($this->conn,$sql);
	}
}
?>