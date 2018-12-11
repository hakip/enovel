<?php
class UserModel{
	//Models connect to database, get data then return to controllers.
	//Models only run on getting called from controllers. Models don't directly change views.
	//Models don't check sessions nor store session informations.
	public $conn;
	function __construct(){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "ass2";
		$this->conn = new mysqli($servername, $username, $password, $dbname);
	}
	function addNew($id, $password, $email, $optional){
		//optinal array: ("$info"=>"info_type", "$info"=>"info_type") for ex: ("Alice"=>"Name")
		//for password, hash and store the hash only. May need to include library.
	}
	function modify($old_info,$new_info,$info_type){

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

	function login($email, $password){
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
			$sql = "UPDATE nguoidung SET matkhau = '".$password."', hoten = '".$fullname."', email = '".$email."' WHERE id = '".$id."'";
		}
		return mysqli_query($this->conn,$sql);
	}
}
?>