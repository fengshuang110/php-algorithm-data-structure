<?php 
echo "<p>已知线性表，LA,LB,现在需要一个新的集合满足
    A=A U B
    LA = (1,2,3,5)
    LB = (1,3,6,7,20)
    </p>";
  $LA = array(1,2,3,5);
  $LB = array(1,3,6,7,20);
  
  function union($la,$lb){
    $len_a = count($la);
    $len_b = count($lb);
    for($i = 0;$i<$len_b;$i++){
      if(!in_array($lb[$i], $la) ){
        $la[++$len_a-1] = $lb[$i];
      }
    }
    return $la;
  }
  var_dump( union($LA,$LB) );
?>