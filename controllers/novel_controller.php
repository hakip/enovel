<?php
class NovelController {
	//Controllers call model for data, process data, import to view and then show view.
	//Controllers don't directly connect to database.
	//Router most of the time doesn't send any data. Get data via $_GET/POST, etc...
	function getEntryList($filter = array(), $sorting = "Ascending") {
		//ngay tao = new: ngay tao cach khoang vai ngay so voi ngay hien tai
		//filter array: ("Filter"=>"Criteria","Filter"=>"Criteria")
		//For example: ("A"=>"ABC") or ("Action"=>"Category")
		//Sorting ("Ascending"/"Descending"=>"Criteria"), for ex: ("Ascending"=>"ABC")
		if($filter["filter"]="yes"){
			//Vi filter chua lam xong nen controller tu get data.
		}
	}
	function getEntryInfo($novel_name) {
		echo "c";
	}
	//for AJAX call only
	function getListChapter() {

	}
	function getChapter($name,$chap) {
		echo $name." ".$chap;
	}

}
?>