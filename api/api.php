<?php
  ini_set('display_errors', '1');
  ini_set('display_startup_errors', '1');
  error_reporting(E_ALL);
  //SE GLI VIENE PASSATO IL PARAMETRO F=nome_funzione
  //LANCIA LA FUNZIONE
  include '../lib/wski.php';
  $wski = new Wski();
  include '../db/db.php';
  session_start();
  if (isset($_GET['f'])) {
    echo $_GET['f']();
  }
?>