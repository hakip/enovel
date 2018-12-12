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
		readfile("././views/novel_info1.php");
		$before = '" alt="failed to load">
                        <div class="wrapper">
                            <div class="btn-group-vertical">
                                <input name="submit" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="Add to list">
                                <button type="button" class="btn btn-info"><a href="/enovel/novel/'.$novel_id.'/1">First chapter</a></button>
                                <button type="button" class="btn btn-warning"><a href="/enovel/novel/'.$novel_id.'/1">Lasted chapter</a></button>
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
        echo $this->getListChapter($novel_id);
        readfile("././views/novel_info3.php");
	}
	//for AJAX call only
	function getListChapter($id) {
		$model = new NovelModel;
		$res = $model->getListChapter($id);
		foreach ($res as $row) {
			echo '<tr><td><a href="/enovel/novel/'.$id.'/'.$row["id"].'">'.$row['ten'].'</a></td>
			                                    <td><a href="read.php">'.$row['ngaytao'].'</a></td>
			                                </tr>
			                                <tr>';
		}
	}
	function getChapter($name,$chap) {
		$model = new NovelModel;
		$res = $model->getChapter($name, $chap);
		$row = mysqli_fetch_row($res);
		readfile("././views/read.php");
		//tim ten truyen
		$tentruyen = "ten tten ";
		echo $tentruyen.'</h2></div></div><h3 class="border-chapter">'.$row[1].'</h3>
            <div class="col-12 col-sm-10 offset-sm-1 pt-5">
                <div class="card">

                    <div class="card-header pt-5 bg-chapter text-center px-0">
                        <button class="btn btn-success text-white m-1" style="box-shadow: 2px 2px black;">Previous</button>
                        <a href="novel_info.php"><button class="btn btn-primary text-white m-1" style="box-shadow: 2px 2px black;">Chapter list</button></a>
                        <button class="btn btn-success text-white m-1" style="box-shadow: 2px 2px black;">Next</button>
                    </div>
                    <ul class="list-group list-group-flush content">
                        <li class="list-group-item">';
		echo $row[2];
		readfile("././views/read2.php");
	}

}
?>