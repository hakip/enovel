<?php
	session_start();
	if(isset($_SESSION['Admin']))
  {
  	require_once('./views/admin/index.php');
  }
  else
  {
    header("location:login");
  }
  
?>