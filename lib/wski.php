<?php
  class wski
  {
    public function qs($string){
      echo "'".$string."'"; 
    }

    public function qn($num){
      echo (int)$num, "\n";
    }
  }
  
  $wski = new wski;
  return $wski;
?>