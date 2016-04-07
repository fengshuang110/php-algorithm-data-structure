<?php 

echo "直接插入排序算法";

$LA = array(12222,-11,119,21,11,22,123,99,33,545,122,2112,12,25,66,555);

function insert_sort($la){
  $len_a = count($la);
  for($i=1;$i<$len_a;++$i){
    if($la[$i]<$la[$i-1]){
      $la['key'] = $la[$i];
      $la[$i] = $la[$i-1];
    }
    for($j = $i-1;  $la['key']<$la[$j];--$j){
      $la[$j+1] = $la[$j];
    }
      $la[$j+1] =  $la['key'];
  }
  return $la;
}

var_dump(insert_sort($LA));
?>