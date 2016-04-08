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


function binsert_sort(&$la){
  $len_a = count($la);
  for($i=1;$i<$len_a;++$i){
    $la['key'] = $la[$i];
    $low = 0;$high = $i-1;
    while($low<=$high){
      $m = intval(($low+$high)/2);
      if($la['key'] < $la[$m]) $high = $m-1;
      else $low = $m+1;
    }
    for($j=$i-1;$j>=$high+1;--$j){
      $la[$j+1] = $la[$j];
    }
    $la[$high+1] = $la['key'];
  } 
}
// echo "直接插入排序前";
// var_dump($LA);
// echo "直接插入排序后";
// q_sort($LA,0,count($LA)-1);
// var_dump($LA);

echo "折半插入排序前";
var_dump($LA);
echo "折半插入排序后";
binsert_sort($LA);
var_dump($LA);



?>