<?php
class UserController {
	//Controllers call model for data, process data, import to view and then show view.
	//Controllers don't directly connect to database.
	//Sessions are temporary and will not be put to database nor models.
	//Controllers need to check session_id before further processes.
	//Router most of the time doesn't send any data. Get data via $_GET/POST, etc...
	function login(){
		//generate session_id
		// return $session_id;
		$id = $_POST["id"];
		$pw = $_POST["pw"];
	}
	function check_session(){
		
	}
	function logout(){

	}
	function register(){
		
	}
	function modify(){
		
	}
	function subscribe(){

	}
	function unsubscribe(){

	}
	function getInfo($id){
		echo $id;
	}
	function removeList(){

	}
	//If possible
	function deleteAccount(){
	}
}
?>