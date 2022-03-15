<?php
  ini_set('display_errors', '1');
  ini_set('display_startup_errors', '1');
  error_reporting(E_ALL);
  //SE GLI VIENE PASSATO IL PARAMETRO F=nome_funzione
  //LANCIA LA FUNZIONE
  if (isset($_GET['f'])) {
    echo $_GET['f']();
  }
  include '../lib/wski.php';
  include '../db/db.php';
  session_start();
?>