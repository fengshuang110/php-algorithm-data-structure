<?php 
require 'library.php';
echo "<p>已知集合
    LA = (1,3,5,6,8)
    LB = (1,4,5,6,7,10)
    计算 (A-B) U (B-A)
    ";

  $LA = array(1,3,5,6,8);
  $LB = array(1,4,5,6,7,10);
  
  function diffrence($la,$lb){
    for($i = 0 ;$i<count($lb);$i++){
      if(in_array($lb[$i],$la)){
        $la = remove_sq($la,$lb[$i]);
      }else{
        $la[] = $lb[$i];
      }
    }
    return $la;
  }
  var_dump(diffrence($LA,$LB));
?>