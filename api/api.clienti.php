<?php

  function test(){
    include 'api.php';
    $sql = "SELECT cognome, nome FROM utenti";
    $array = [];

    if ($result = $db->query($sql)) {
      while ($row = $result -> fetch_row()) {
        printf ("%s (%s)\n", $row[0], $row[1]);
      }
      $result -> free_result();
    }
  }
  if (isset($_GET['f'])) {
    echo $_GET['f']();
  }
?>