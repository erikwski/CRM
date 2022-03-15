<?php
  ini_set('display_errors', '1');
  ini_set('display_startup_errors', '1');
  error_reporting(E_ALL);

  $wski = require('../lib/wski.php');
  $db = require('../db/db.php');
  session_start();
  if (isset($_GET['f'])) {
    echo $_GET['f']();
  }
?>