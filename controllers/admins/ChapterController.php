<?php
	require_once('models/chapter_model.php');
	/**
	 * id, url_anh, ten, mota, ngaytao, trangthai, tentacgia
	 */
	class AdminChaptersController
	{
		public function index(){
			$model = new ChapterModel();
			$novels = $model->a_index();
			$str = '<thead class="thead-dark">
			          <tr>
			            <th scope="col"><button class="btn btn-outline-secondary text-white" onclick="newNovel();" >New</button></th>
			            <th scope="col">Title</th>
			            <th scope="col">Content</th>
			            <th scope="col">Created at</th>
			            <th scope="col">Updated at</th>
			            <th scope="col">Novel ID</th>
			            <th scope="col">Action</th>
			          </tr>
							</thead>
							<tbody>';
		  while ($row = mysqli_fetch_array($novels)) {
		  	$str = $str. '<tr>
									      <th scope="row" name="id_novel" data-id ='.$row{'id'}.'>'.$row{'id'}.'</th>
									      <td>'.$row{'ten'}.'</td>
									      <td>'.$row{'noidung'}.'</td>
									      <td>'.$row{'ngaytao'}.'</td>
									      <td>'.$row{'ngaysua'}.'</td>
									      <td>'.$row{'truyen_id'}.'</td>
									      <td><a href="#" class="text-danger mr-3"><i class="fas fa-trash-alt" onclick= "delete_novel(this);"></i></a><a href="#" class="text-info"><i class="fas fa-edit" onclick="edit_novel(this);"></i></a></td>
									    </tr>';
			}
			$str = $str.'</tbody>';
			echo $str;
		}
	}
?>