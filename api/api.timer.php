<?php
  include 'api.php';

  function test(){
    //return $wski->qs("ciao");
    return "ciao";
  }
  //SE GLI VIENE PASSATO IL PARAMETRO F=nome_funzione
  //LANCIA LA FUNZIONE
  if (isset($_GET['f'])) {
    echo $_GET['f']();
  }
?>