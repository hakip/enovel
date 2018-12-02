<?php
class Router {
	//break url into uri and path
	function parse(){
		global $baseUrl;
		$requestUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		$requestString = substr($requestUrl, strlen($baseUrl));
		$uri = explode("/",$requestString);
		$this->newRoute($uri);
	}
	//routing
	function newRoute($infoarr){
		//Consider using a route table if possible
		switch ($infoarr[0]){
			case "user":
				//Neu co nhieu hon 2 thong so (vi du: read/ten-truyen/chap2) thi thong so tu thu 3 la param
				//cho ham xu ly
				if(count($infoarr)>2){
					$param = array_slice($infoarr,2);
				}
				$controllerName = "UserController";
				$actionName = $infoarr[1];
				$controller = new $controllerName;
				$controller->$actionName();
				break;
			//tuong tu ben tren
			case "read":
				echo "todo";
				break;
			//neu nhap vao link sai thi chuyen ve home
			default:
				$this->noRoute();
				break;
		}
	}
	//link error
	function noRoute(){
		readfile("views/home.html");
		// echo "Oops! There is no page with this name on the site. Check your url.";
	}
}
?>