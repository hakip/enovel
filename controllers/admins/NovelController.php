<?php
	require_once('models/novel_model.php');
	/**
	 * id, url_anh, ten, mota, ngaytao, trangthai, tentacgia
	 */
	class AdminNovelController
	{
		public function index(){
			$model = new NovelModel();
			$novels = $model->a_index();
			$str = '<thead class="thead-dark">
			          <tr>
			            <th scope="col"><button class="btn btn-outline-secondary text-white" onclick="newNovel();" >New</button></th>
			            <th scope="col">Title</th>
			            <th scope="col">Image</th>
			            <th scope="col">Description</th>
			            <th scope="col">Created at</th>
			            <th scope="col">Status</th>
			            <th scope="col">Author</th>
			            <th scope="col">Action</th>
			          </tr>
							</thead>
							<tbody>';
		  while ($row = mysqli_fetch_array($novels)) {
		  	$str = $str. '<tr>
									      <th scope="row" name="id_novel" data-id ='.$row{'id'}.'>'.$row{'id'}.'</th>
									      <td>'.$row{'ten'}.'</td>
									      <td><img src="'.$row{'url_anh'}.'" width="130" height="150" alt="url-image-wrong"/></td>
									      <td>'.$row{'mota'}.'</td>
									      <td>'.$row{'ngaytao'}.'</td>
									      <td>'.(($row{'trangthai'})? '<span class="text-success">Active</span>':'<span class="text-secondary">Inactive</span>').'</td>
									      <td>'.$row{'tentacgia'}.'</td>

									      <td><a href="#" class="text-danger mr-3"><i class="fas fa-trash-alt" onclick= "delete_novel(this);"></i></a><a href="#" class="text-info"><i class="fas fa-edit" onclick="edit_novel(this);"></i></a></td>
									    </tr>';
			}
			$str = $str.'</tbody>';
			echo $str;
		}
		public function newrecord(){
			require_once('./views/admin/novels/form.php');
		}
		public function createrecord(){
			$ten = isset($_POST['ten'])? $_POST['ten']: '';
			$url_anh = isset($_POST['url_anh'])? $_POST['url_anh']: '';
			$mota = isset($_POST['mota'])? $_POST['mota']: '';
			$trangthai = isset($_POST['trangthai'])? $_POST['trangthai']: '';
			$tentacgia = isset($_POST['tentacgia'])? $_POST['tentacgia']: '';
			$model = new NovelModel();
			$user = $model->a_create($ten, $url_anh, $mota, $trangthai, $tentacgia);
			if ($user) {
				echo '<script>
								window.location.href = "dashboard#rel.in.novel";
							</script>';
			}

		}

		public function deleterecord(){
			$id = isset($_POST['id'])? $_POST['id']: '';
			$model = new NovelModel();
			$result = $model->a_delete_novel($id);
			echo $result;
		}

		public function editrecord(){
			$id = isset($_POST['id'])? $_POST['id']: '';
			$model = new NovelModel();
			$result = $model->a_get_novel($id);
			$novel = mysqli_fetch_array($result);
			require_once('./views/admin/novels/form_edit.php');
		}

		public function updaterecord(){
			$id = isset($_POST['id'])? $_POST['id']: '';
			$ten = isset($_POST['ten'])? $_POST['ten']: '';
			$url_anh = isset($_POST['url_anh'])? $_POST['url_anh']: '';
			$mota = isset($_POST['mota'])? $_POST['mota']: '';
			$trangthai = isset($_POST['trangthai'])? $_POST['trangthai']: '';
			$tentacgia = isset($_POST['tentacgia'])? $_POST['tentacgia']: '';
			$model = new NovelModel();
			$result = $model->a_update_novel($id, $ten, $url_anh, $mota, $trangthai, $tentacgia);
			if ($result) {
				echo '<script>
								window.location.href = "dashboard#rel.in.novel";
							</script>';
			}else{
				echo '<script>
								window.location.href = "dashboard#err.up.novel";
							</script>';
			}
		}

		
	}
?>