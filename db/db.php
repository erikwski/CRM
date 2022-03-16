<?php
  namespace Db;
  class Db
  {
    public $conn_string = "host=ec2-54-195-76-73.eu-west-1.compute.amazonaws.com port=5432 dbname=dc689gh097f9aa user=fkhbvarqmoesyh password=05c99a0c8989be996391a6cc8f3d9614e46da60f78e9c12bafb7dc66964e35b9";
    public function query($sql){
      $conn = pg_pconnect($this->conn_string);
      if (!$conn) {
        echo "Errore nello stabilire la connessione.\n";
        exit;
      }
      $result = pg_query($conn, $sql);
      return $result;
    }
  }

  $db = new Db();
  return $db;
?>