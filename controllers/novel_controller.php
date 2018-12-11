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
		// readfile("././views/list_novel.php");
		$model = new NovelModel;
		$res = $model->getEntryList($filter);
		$rows = mysqli_fetch_row($res);
		readfile("././views/part1.php");
		foreach ($res as $row) {
			$name = $row['ten'];
			$link = $this->makeLink($name);
			echo '<tr><td><a class="alink" href="/enovel/novel/'.$link.'">'.$name.'</a></td>';
			echo '<td>Chapter 1</td>';
			echo  "<td>31/12/2017</td>";
			$res = $model->getViewCount($row["id"]);
			echo '<td class="text-center">'.$res.'</td></tr>';
		}
		readfile("././views/part2.php");
		// if($filter["filter"]="yes"){
		// 	//Vi filter chua lam xong nen controller tu get data.
		// }
	}
	function makeLink($novel_name){
		$names = explode(" ",$novel_name);
		$res = "";
		for($i = 0; $i< count($names);$i++ ) {
			if ($i > 0) {
				$res = $res."-";
			}
			$res = $res.strtolower($names[$i]);
		}
		return $res;
	}
	function getEntryInfo($novel_name) {
		$model = new NovelModel;
		$model->getEntryInfo("abd");
	}
	//for AJAX call only
	function getListChapter() {

	}
	function getChapter($name,$chap) {
		echo $name." ".$chap;
	}

}
?>