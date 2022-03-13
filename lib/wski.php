<?php
  namespace Wski;
  class Wski
  {
    function __construct(){}
    public function qs($string){
      echo "'".$string."'"; 
    }

    public function qn($num){
      echo (int)$num, "\n";
    }
  }
  
  $wski = new Wski();
?>