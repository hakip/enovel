<?php
  session_start();

  if(isset($_SESSION['Admin']))
  {
    echo ' Well Come '.$_SESSION['Admin'].'<br/>';
    echo '<a href="">Logout</a>';
  }