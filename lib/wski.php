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
  }
  
  $wski = new Wski();
  return $wski;
?>