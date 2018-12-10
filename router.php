<?php
include_once 'config.php';
include_once "router.php";
include_once 'controllers/user_controller.php';
include_once 'controllers/novel_controller.php';
include_once 'models/user_model.php';
include_once 'models/novel_model.php';
class Router {
	//break url into uri and path
	function parse(){
		global $baseUrl;
		$requestUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		$requestString = substr($requestUrl, strlen($baseUrl));
		// $uri = explode("/",$requestString);
		if(strlen($requestString)> 0 && $requestString  !="index.php") {
			$this->routeTable($requestString);
		}
		else {
			readfile("views/home.php");
			readfile("index.php");
		}
	}
	function routeTable($url){
		switch (true) {
			case preg_match("~login~",$url):
				readfile("views/login.php");
				$controller = new UserController;
				$controller->login();
				break;
			case preg_match("~logout~",$url):
				$controller = new UserController;
				$controller->logout();
				break;
			case preg_match("~register~",$url):
				readfile("views/register.php");
				$controller = new UserController;
				$controller->register();
				break;
			case preg_match("~edit~",$url):
				readfile("views/edit_account.php");
				$controller = new UserController;
				$controller->edit();
				break;
			case preg_match("~forget-pass~",$url):
				readfile("views/edit_account.php");
				$controller = new UserController;
				$controller->edit();
				break;
			case preg_match("~subscribe~",$url):
				$controller = new UserController;
				$controller->subscribe();
				break;
			case preg_match("~unsubscribe~",$url):
				$controller = new UserController;
				$controller->unsubscribe();
				break;
			
			
			case preg_match("~delete~",$url):
				$controller = new UserController;
				$controller->deleteAccount();
				break;
			//default ABC Ascending
			case preg_match("~novel/list/~",$url):
				$controller = new NovelController;
				$controller->getEntryList($filter);
				break;
			//hot picks
			case preg_match("~novel/list\?filter=hot~",$url):
				$controller = new NovelController;
				$filter =["luotxem"=>"100"];
				$controller->getEntryList($filter);
				break;
			//new entries
			case preg_match("~novel/list\?filter=new~",$url):
				$controller = new NovelController;
				$filter =["ngaytao"=>"new"];
				$controller->getEntryList($filter);
				break;
			//lastest updates
			case preg_match("~novel/list\?filter=update~",$url):
				$controller = new NovelController;
				$filter =["update"=>"new"];
				$controller->getEntryList();
				break;
			//All novels whose names start with characters
			case preg_match_all("~novel/list\?start=~m",$url,$match):
				$controller = new NovelController;
				$arg = substr($url, 17);
				$filter =["start"=>$arg];
				$controller->getEntryList($filter);
				break;
			// click filter on list.html send get request.
			case preg_match_all("~novel/list\?filter=y&~m",$url,$match):
				$controller = new NovelController;
				$filter=["filter"=>"yes"];
				$controller->getEntryList($filter);
				break;
			case preg_match("#novel/[^/]+/chap[^/]+#",$url):
				$controller = new NovelController;
				$arr = explode("/",$url);
				$name = $arr[1];
				$chap = $arr[2];
				$controller->getChapter($name,$chap);
				break;
			//novel info page
			case preg_match("#^novel/[^/]+$#",$url):
				$controller = new NovelController;
				$name = substr($url,6);
				$controller->getEntryInfo($name);
				break;

			default:
				readfile("views/error.html");
				break;
		}
	}
}
?>