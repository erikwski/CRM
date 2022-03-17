<?php

function test(){
    include 'api.php';
    return "ciao";
  }
  if (isset($_GET['f'])) {
    echo $_GET['f']();
  }
?>