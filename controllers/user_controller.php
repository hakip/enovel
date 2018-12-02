<?php
class UserController {
	//Controllers call model for data, process data, import to view and then show view.
	//Controllers don't directly connect to database.
	//Sessions are temporary and will not be put to database nor models.
	//Controllers need to check session_id before further processes.
	function login($id, $password){
		//generate session_id
		// return $session_id;
	}
	function check_session($session_id){
		
	}
	function logout(){

	}
	function register($id, $password, $email, $optional){
		//optinal array: ("$info"=>"info_type", "$info"=>"info_type") for ex: ("Alice"=>"Name")
		//for password, hash and store the hash only. May need to include library.
	}

	function subscribe($id, $novel_name, $session_id){

	}
	function unsubscribe($id, $novel_name, $session_id){

	}
	function getInfo($id){

	}
	function removeList(){

	}
	//If possible
	function deleteAccount($id, $session_id){
	}
}
?>