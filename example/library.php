<?php 
//插入替换元素
function ListInsert($l,$index,$value){
  if(is_array($l)){
    $l[$index-1] = $value;
  }
  return $l;
}
//获取元素
function GetElem($L,$index,$value){
  if(is_array($L)){
    $value = $L[$index-1];
  }
  return $value;
}

//插入顺序移动元素
function insert_sq($la,$i,$value){
  if($i < 0 || $i>count($la)) return false;
  $j = $i;
  $len_a = count($la);
  $lb = $la;
  while($j < $len_a){
    $la[$j+1] = $lb[$j];
    $j++;
  }
  $la[$i] = $value;
  return $la;
}

function remove_sq($la,$value){
  $len_a = count($la);
  foreach ($la as $key => $v){
    if($v == $value){
      unset($la[$key]);
      break;
    }
  }
  return $la;
}

//二分查找算法

function find_bin($la,$value){
  $low = 0;$high = count($la)-1;
  while ($low <= $high){
    $mid = intval(($low+$high)/2);
    if($la[$mid] == $value){
      return $mid;
    }elseif($value<$la[$mid]){
      $high = $mid-1;
    }else{
      $low = $mid+1;
    }
  }
  return false;
}

//顺序查找算法 
function find_ls($la,$value){
  $index = false;
  foreach ($la as $k => $v){
    if($v == $value){
      $index = $k;
      break;
    }
  }
  return $index;
}

?>