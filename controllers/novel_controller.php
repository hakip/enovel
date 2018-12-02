<?php
class NovelController {
	//Controllers call model for data, process data, import to view and then show view.
	//Controllers don't directly connect to database.
	function getEntryList($filter, $sorting) {
		//filter array: ("Filter"=>"Criteria","Filter"=>"Criteria")
		//For example: ("A"=>"ABC") or ("Action"=>"Category")
		//Sorting ("Ascending"/"Descending"=>"Criteria"), for ex: ("Ascending"=>"ABC")
	}
	function getEntryInfo($novel_name, $chapter_number) {

	}
	//for AJAX call only
	function getListChapter() {

	}
	function getChapter() {

	}

}
?>