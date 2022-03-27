<?php
  namespace Db;
  class Db
  {
    private $url = "31.11.39.90:3306";
    private $user = "Sql1625119";
    private $pwd = "Esoxlock7025";
    private $db_name = "Sql1625119_1";

    public function query($sql){
      $mysqli = new mysqli($url, $user, $pwd, $db_name);
    
    /* check connection */
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
    $result = $mysqli->query($sql);
    if (!$result) {
        printf("Error message: %s\n", $mysqli->error);
    }
    
    /* close connection */
    $mysqli->close();

    return $result;
    }
  }

  $db = new Db();
  return $db;
?>