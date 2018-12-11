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
			$sql = 'SELECT * FROM truyen';
			$res = $this->conn->query($sql);
			return $res;
		}
	}
	function getEntryInfo($novel_name) {
		$sql = 'SELECT * FROM truyen';
		$res = $this->conn->query($sql);
		echo $sql;
		print_r($res);
	}
	function getViewCount($novel_id){
		$sql = 'SELECT luotxem FROM tuongtac WHERE truyen_id ='.$novel_id;
		$res = $this->conn->query($sql);
		$rows = mysqli_fetch_row($res);
		return $rows[0];
	}
	//for AJAX call only
	function getListChapter() {

	}
	function getChapter($novel_name,$chapter_number) {

	}
	//admin `id, url_anh, ten, mota, ngaytao, trangthai, tentacgia`
	function a_index(){
		$result = mysqli_query($this->conn, "SELECT * FROM truyen" );
		return $result;
	}

	function a_create($ten, $url_anh, $mota, $trangthai, $tentacgia){
		$sql = "INSERT INTO truyen(ten,url_anh,mota,trangthai,tentacgia,ngaytao) VALUES('".$ten."','".$url_anh."','".$mota."','".$trangthai."','".$tentacgia."', NOW())";
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
	function a_update_novel($id, $ten, $url_anh, $mota, $trangthai, $tentacgia){
		$sql = "UPDATE truyen SET ten = '".$ten."', url_anh = '".$url_anh."', mota = '".$mota."', trangthai = '".$trangthai."', tentacgia = '".$tentacgia."', ngaysua = NOW() WHERE id = '".$id."'";

		return mysqli_query($this->conn,$sql);
	}

}
?>