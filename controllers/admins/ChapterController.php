<?php
	require_once('models/chapter_model.php');
	require_once('models/novel_model.php');
	/**
	 * id, url_anh, ten, mota, ngaytao, trangthai, tentacgia
	 */
	class AdminChaptersController
	{
		public function index(){
			$model = new ChapterModel();
			$chapters = $model->a_index();
			$str = '<thead class="thead-dark">
			          <tr>
			            <th scope="col"><button class="btn btn-outline-secondary text-white" onclick="newChapter();" >New</button></th>
			            <th scope="col">Title</th>
			            <th scope="col">Content</th>
			            <th scope="col">Novel NAME</th>
			            <th scope="col">Created at</th>
			            <th scope="col">Updated at</th>
			            <th scope="col">Action</th>
			          </tr>
							</thead>
							<tbody>';
		  while ($row = mysqli_fetch_array($chapters)) {
		  	$novel_model =  new NovelModel();
		  	$novel = mysqli_fetch_array($novel_model->a_get_novel($row{'truyen_id'}));
		  	$str = $str. '<tr>
									      <th scope="row" name="id_chapter" data-id ='.$row{'id'}.'>'.$row{'id'}.'</th>
									      <td>'.$row{'ten'}.'</td>
									      <td>'.$row{'noidung'}.'</td>
									      <td>'.$novel{'ten'}.'</td>
									      <td>'.$row{'ngaytao'}.'</td>
									      <td>'.$row{'ngaysua'}.'</td>
									      <td><a href="#" class="text-danger mr-3"><i class="fas fa-trash-alt" onclick= "delete_chapter(this);"></i></a><a href="#" class="text-info"><i class="fas fa-edit" onclick="edit_chapter(this);"></i></a></td>
									    </tr>';
			}
			$str = $str.'</tbody>';
			echo $str;
		}
		public function newrecord(){
		  	$novel_model =  new NovelModel();
		  	$novels = $novel_model->a_index();
			require_once('./views/admin/chapters/form.php');
		}

		public function createrecord(){
			$ten = isset($_POST['ten'])? $_POST['ten']: '';
			$noidung = isset($_POST['noidung'])? $_POST['noidung']: '';
			$truyen_id = isset($_POST['truyen_id'])? $_POST['truyen_id']: '';
			$model = new ChapterModel();
			$chapter = $model->a_create($ten, $noidung, $truyen_id);
			if ($chapter) {
				echo '<script>
								window.location.href = "dashboard#rel.in.chapter";
							</script>';
			}

		}

		public function deleterecord(){
			$id = isset($_POST['id'])? $_POST['id']: '';
			$model = new ChapterModel();
			$result = $model->a_delete($id);
			echo $result;
		}

		public function editrecord(){
			$id = isset($_POST['id'])? $_POST['id']: '';
			$model = new ChapterModel();
			$result = $model->a_get_chapter($id);
			$chapter = mysqli_fetch_array($result);
			$novel_model =  new NovelModel();
		  	$novels = $novel_model->a_index();
			require_once('./views/admin/chapters/form_edit.php');
		}
		public function updaterecord(){
			$id = isset($_POST['id'])? $_POST['id']: '';
			$ten = isset($_POST['ten'])? $_POST['ten']: '';
			$noidung = isset($_POST['noidung'])? $_POST['noidung']: '';
			$truyen_id = isset($_POST['truyen_id'])? $_POST['truyen_id']: '';
			$model = new ChapterModel();
			$result = $model->a_update($id, $ten, $noidung, $truyen_id);
			if ($result) {
				echo '<script>
								window.location.href = "dashboard#rel.in.chapter";
							</script>';
			}else{
				echo '<script>
								window.location.href = "dashboard#err.up.chapter";
							</script>';
			}
		}
	}
?>