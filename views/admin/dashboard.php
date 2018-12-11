<?php
	session_start();
	if(isset($_SESSION['Admin']))
  {
  	require_once('./views/admin/index.php');
  }
  else
  {
    require_once('./views/admin/login_template.php');
  }
  
?>