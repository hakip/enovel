<?php
class NovelModel {
	//Models connect to database, get data then return to controllers.
	//Models only run on getting called from controllers. Models don't directly change views.
	public $conn;
	function __construct(){
		$this->conn = new mysqli($servername, $username, $password, $dbname);
	}
	function getEntryList($filter) {
		
	}
	function getEntryInfo($novel_name) {

	}
	//for AJAX call only
	function getListChapter() {

	}
	function getChapter($novel_name,$chapter_number) {

	}

}
?>