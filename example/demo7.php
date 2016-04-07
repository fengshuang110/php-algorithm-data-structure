<?php

echo "快速排序算法";

$LA = array(12222,-11,119,21,11,22,123,99,33,545,122,2112,12,25,66,555);

//一次快排
function part_sort(&$la,$low,$high){
  $la['key'] = $la[$low];
  while ($low<$high){
    while($low<$high && $la[$high] >= $la['key']){
      --$high;
    }
    $la[$low] = $la[$high];
    while ($low<$high &&  $la[$low] <= $la['key']){
       ++$low;
    }
    $la[$high] = $la[$low];   
  }
  $la[$low] = $la['key'];
  return $low;
}

//递归
function q_sort(&$la,$low,$high){
  if($low<$high){
    $pivitloc = part_sort($la,$low,$high);
    q_sort($la,$low,$pivitloc-1);
    q_sort($la,$pivitloc+1,$high);
  }
}
echo "排序前";
var_dump($LA);
echo "排序后";
q_sort($LA,0,count($LA)-1);
var_dump($LA);


?>