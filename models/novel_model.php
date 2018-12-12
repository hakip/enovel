<?php
include_once 'config.php';
include_once "router.php";
include_once 'controllers/user_controller.php';
include_once 'controllers/novel_controller.php';
include_once 'models/user_model.php';
include_once 'models/novel_model.php';

class NovelModel {
	//Models connect to database, get data then return to controllers.
	//Models only run on getting called from controllers. Models don't directly change views.
	public $conn;
	function __construct(){
		global $servername;
  		global $username;
  		global $password;
  		global $dbname;
  		require("config.php");
		$this->conn = new mysqli($servername, $username, $password, $dbname);

	}
	function getEntryList($filter) {
		if($filter == null) {
			$sql = 'SELECT * FROM truyen'.' ORDER BY id DESC LIMIT 20';
			$res = $this->conn->query($sql);
			return $res;
		}
		else {
			$filter_arr = explode("=", $filter[0]);
			$where = " WHERE ".$filter_arr[0]." = '".$filter_arr[1]."'";
			$sql = 'SELECT * FROM truyen'.$where.' ORDER BY id DESC LIMIT 20';
			$res = $this->conn->query($sql);
			return $res;
		}
	}
	function getEntryInfo($novel_id) {
		$sql = "SELECT * FROM truyen WHERE id = '".$novel_id."'";
		$res = $this->conn->query($sql);
		return $res;
	}
	function getViewCount($novel_id){
		$sql = 'SELECT luotxem FROM tuongtac WHERE truyen_id ='.$novel_id;
		$res = $this->conn->query($sql);
		$rows = mysqli_fetch_row($res);
		return $rows[0];
	}

	function getListChapter($id) {
		$sql = 'SELECT * FROM chuong WHERE truyen_id ='.$id.' ORDER BY id DESC LIMIT 20';
		$res = $this->conn->query($sql);
		return $res;
	}
	function getChapter($novel_name,$chapter_number) {
		$chap_name = "Chapter 1";
		$sql = 'SELECT * FROM chuong WHERE truyen_id ='.$novel_name.' AND ten ="'.$chap_name.'" ORDER BY id DESC LIMIT 20';
		if($res = $this->conn->query($sql)) {
			return $res;
		}
		else echo "Chapter not found";
	}
	//admin `id, url_anh, ten, mota, ngaytao, trangthai, tentacgia`
	function a_index(){
		$result = mysqli_query($this->conn, "SELECT * FROM truyen" );
		return $result;
	}

	function a_create($ten, $theloai, $url_anh, $mota, $trangthai, $tentacgia){
		$sql = "INSERT INTO truyen(ten,theloai,url_anh,mota,trangthai,tentacgia,ngaytao) VALUES('".$ten."','".$theloai."','".$url_anh."','".$mota."','".$trangthai."','".$tentacgia."', NOW())";
		return mysqli_query($this->conn,$sql);
	}
	function a_delete_novel($id){
		$deleteQuery = "DELETE FROM truyen WHERE id = '".$id."'";
		return mysqli_query($this->conn,$deleteQuery);
	}
	function a_get_novel($id){
		$sql =  "SELECT * FROM truyen WHERE id = '".$id."'";
		return mysqli_query($this->conn,$sql);
	}
	function a_update_novel($id, $ten, $theloai, $url_anh, $mota, $trangthai, $tentacgia){
		$sql = "UPDATE truyen SET ten = '".$ten."', theloai = '".$theloai."', url_anh = '".$url_anh."', mota = '".$mota."', trangthai = '".$trangthai."', tentacgia = '".$tentacgia."', ngaysua = NOW() WHERE id = '".$id."'";

		return mysqli_query($this->conn,$sql);
	}

}
?>