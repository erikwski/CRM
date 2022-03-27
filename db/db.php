<?php
  class Db
  {
    private $db;
    public function __construct($db)
    {
      $this->db = $db;
    }

    public function query($sql){    
      /* check connection */
      if ($this->db->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
      }
      $result = $this->db->query($sql);
      if (!$result) {
        printf("Error message: %s\n", $this->db->error);
      }
      
      /* close connection */
      $this->db->close();

      return $result;
    }
  }
?>