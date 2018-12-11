<?php
session_start();
include_once 'config.php';
include_once "router.php";
include_once 'controllers/user_controller.php';
include_once 'controllers/novel_controller.php';
include_once 'models/user_model.php';
include_once 'models/chapter_model.php';
include_once 'models/novel_model.php';
include_once 'controllers/admins/AdminController.php';
include_once 'controllers/admins/UserController.php';
include_once 'controllers/admins/NovelController.php';
include_once 'controllers/admins/ChapterController.php';

$router = new Router;
$router->parse();
?>