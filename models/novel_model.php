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

}
?>