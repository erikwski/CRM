<?php
  namespace Wski;
  class Wski
  {
    public function qs($string){
      return "'".$string."'"; 
    }
    
    public function qn($num){
      return $num;
    }

    public function getFirstRow($res){
      $row = $res->fetch_row();
      $value = $row[0] ?? false;
      return $value;
    }
  }
  
  $wski = new Wski();
  return $wski;
?>