<?php
  session_start();
  if(isset($_SESSION['user_logged'])){
    return true;
  }else{
    return false;
  }
?>