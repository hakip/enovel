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
			$link = $this->makeLink($row['id']);
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
	function getEntryInfo($novel_id) {
		$model = new NovelModel;
		$res = $model->getEntryInfo($novel_id);
		$row = mysqli_fetch_row($res);
		print_r($row);
		readfile("././views/novel_info1.php");
		$before = '" alt="failed to load">
                        <div class="wrapper">
                            <div class="btn-group-vertical">
                                <input name="submit" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="Add to list">
                                <button type="button" class="btn btn-info">First chapter</button>
                                <button type="button" class="btn btn-warning">Lasted chapter</button>
                            </div>
                        </div>
                    </div>

                    <div class="new-story__block new-story__right col-md-9">
                        <h3 class="text-center">';
		echo $row[1].$before.$row[2].'</h3><p>'.$row[4].'</p><div class="new-story__tags"><table class="table table-borderless table-hover"><tbody><tr><td class="line">Author</td><td>'.$row[8].'</td></tr><tr><td class="line">Genres</td><td>'.$row[3].'</td></tr><tr><td class="line">Status</td><td>';
		if($row[7] == 0) $stt = "Ongoing";
		else $stt = "Completed";
		echo $stt.'</td>
                                    </tr>
                                    <tr>
                                        <td class="line">Views</td>
                                        <td>1230</td>
                                    </tr>';
        readfile("././views/novel_info2.php");
        //chapter
        readfile("././views/novel_info3.php");
	}
	//for AJAX call only
	function getListChapter() {

	}
	function getChapter($name,$chap) {
		echo $name." ".$chap;
	}

}
?>