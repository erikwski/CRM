<?php
  $is_logged = require("../api/check_login.php");
   if (!$is_logged) {
    header("Location: ../login.php");
    exit();
  }
?>
<script src="/lib/jQuery.js"></script>
<script src="/lib/wski.js"></script>
<script>
  //QUESTO JS VIENE ESEGUITO PER OGNI PAGINA
  const wski = new Wski()
</script>