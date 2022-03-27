<?php
  ini_set('display_errors', '1');
  ini_set('display_startup_errors', '1');
  error_reporting(E_ALL);
  require_once '../db/db.php';

  $wski = require('../lib/wski.php');
  $host = "bwlyec5v1ma4ksdfwuci-mysql.services.clever-cloud.com";
  $user = "unctnq4dqq2ojkj7";
  $pwd = "A9UuG1C9KHfR7FAGASRU";
  $db_name = "bwlyec5v1ma4ksdfwuci";
  $conn = new mysqli($host, $user, $pwd, $db_name);
  $db = new Db($conn);
  session_start();
?>