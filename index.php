<?php
  $is_connected = require("api/check_login.php");
  // sempre true al momento
   if ($is_connected) {
    //da aggiungere controllo su tipo utente
    header("Location: views/timer.php");
    exit();
  }else{
    header("Location: login.php");
    exit();
  }

?>