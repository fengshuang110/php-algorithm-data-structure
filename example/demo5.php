<?php 

echo "构造次优查找树的递归算法";

function SecondOptimal($T,$L,$W,$low,$high){
  $i = $low;
  $min = abs($W[$high] - $W[$low]);
  $dw = $W[$high] - $W[$low-1];
  for($j=$low+1;$j<$high;++$j){
    if(abs($dw-$W[$j]-$W[$j-1]) < $min){
      $i = $j;
      $min = abs($dw-$W[$j]-$W[$j-1]); 
    }
  }
  $T['data'] = $L[$i];
  if($i == $low) $T['lchild'] = array();
  else SecondOptimal($T['lchild'],$L,$W,$low,$i-1);
  if($i == $high) $T['rchild'] = array();
  else SecondOptimal($T['lchild'],$L,$W,$low+1,$high);
}

$L = array('0','A','B','C','D','E','F','G','H','I');
$W = array(0,1,1,2,5,3,4,4,3,5);
$T = array();
SecondOptimal($T,$L,$W,1,count($L)-1);
var_dump($T);

?>