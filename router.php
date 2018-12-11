<?php
include_once 'config.php';
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
			case preg_match("~user/login~",$url):
				readfile("views/login.php");
				$controller = new UserController;
				$controller->login();
				break;
			case preg_match("~user/logout~",$url):
				$controller = new UserController;
				$controller->logout();
				break;
			case preg_match("~user/register~",$url):
				readfile("views/register.php");
				$controller = new UserController;
				$controller->register();
				break;
			case preg_match("~user/edit~",$url):
				readfile("views/edit_account.php");
				$controller = new UserController;
				$controller->edit();
				break;
			case preg_match("~user/forget_pass~",$url):
				readfile("views/forget_pass.php");
				$controller = new UserController;
				$controller->forgetPassword();
				break;
			case preg_match("~user/list_subscipt~",$url):
				$controller = new UserController;
				$controller->subscribe();
				break;
			case preg_match("~user/unsubscribe~",$url):
				$controller = new UserController;
				$controller->unsubscribe();
				break;
			//default ABC Ascending
			case preg_match("~novel/list/~",$url):
				$controller = new NovelController;
				$controller->getEntryList();
				break;
			case preg_match("~viewframe~", $url):
				readfile("views/viewframe.php");
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
				$filterStr = substr($url, 20);
				$filters = explode("&", $filterStr);
				$controller->getEntryList($filters);
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

			// admin
			case preg_match("~admin/index~", $url):
				$controller = new AdminController;
				$controller->login();
				break;
			case preg_match("~admin/logout~", $url):
				$controller = new AdminController;
				$controller->logout();
				break;
			case preg_match("~admin/dashboard~", $url):
				$controller = new AdminController;
				$controller->checkSession();
				break;
			// users cms
			case preg_match("~admin/users~", $url):
				$controller = new AdminUserController;
				$controller->index();
				break;
			case preg_match("~admin/user_new~", $url):
				$controller = new AdminUserController;
				$controller->newrecord();
				break;
			case preg_match("~admin/user_create~", $url):
				$controller = new AdminUserController;
				$controller->createrecord();
				break;
			case preg_match("~admin/delete_user~", $url):
				$controller = new AdminUserController;
				$controller->deleterecord();
				break;
			case preg_match("~admin/user_edit~", $url):
				$controller = new AdminUserController;
				$controller->editrecord();
				break;
			case preg_match("~admin/user_update~", $url):
				$controller = new AdminUserController;
				$controller->updaterecord();
				break;
			// novels cms
			case preg_match("~admin/novels~", $url):
				$controller = new AdminNovelController;
				$controller->index();
				break;
			case preg_match("~admin/novel_new~", $url):
				$controller = new AdminNovelController;
				$controller->newrecord();
				break;
			case preg_match("~admin/novel_create~", $url):
				$controller = new AdminNovelController;
				$controller->createrecord();
				break;
			case preg_match("~admin/delete_novel~", $url):
				$controller = new AdminNovelController;
				$controller->deleterecord();
				break;
			case preg_match("~admin/novel_edit~", $url):
				$controller = new AdminNovelController;
				$controller->editrecord();
				break;
			case preg_match("~admin/novel_update~", $url):
				$controller = new AdminNovelController;
				$controller->updaterecord();
				break;


			default:
				readfile("views/error.html");
				break;
		}
	}
}
?>