<?php
class ChapterModel{
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

	function a_index(){
		$result = mysqli_query($this->conn, "SELECT * FROM chuong" );
		return $result;
	}
	function a_delete($id){
		$deleteQuery = "DELETE FROM chuong WHERE id = '".$id."'";
		return mysqli_query($this->conn,$deleteQuery);
	}
	function a_create($ten, $noidung, $truyen_id){
		$sql = "INSERT INTO chuong(ten,noidung,truyen_id,ngaytao) VALUES('".$ten."','".$noidung."','".$truyen_id."', NOW())";
		return mysqli_query($this->conn,$sql);
	}
	function a_delete_all($id_novel){
		$deleteQuery = "DELETE FROM chuong WHERE truyen_id = '".$id_novel."'";
		return mysqli_query($this->conn,$deleteQuery);
	}
	function a_get_chapter($id){
		$sql =  "SELECT * FROM chuong WHERE id = '".$id."'";
		return mysqli_query($this->conn,$sql);
	}
	function a_update($id, $ten, $noidung, $truyen_id){
		$sql = "UPDATE chuong SET ten = '".$ten."',noidung = '".$noidung."',truyen_id = '".$truyen_id."',ngaysua = 'NOW()' WHERE id = '".$id."' ";
		return mysqli_query($this->conn,$sql);
	}
}
?>