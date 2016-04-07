<?php 

echo
"<p>
      已知线性表LA和LB的数据元素是非递减有序排列，归并LA和LB成为一个新的
       线性表LC 使之依然是非递减有序排列
   </p>  
   LA = (3,5,7,11);
   LB = (3,6,8,9,11,15,20) 
";
    $LA = array(3,5,7,11);
    $LB = array(3,6,8,9,11,15,20);
    $LC = array();
    
 function merge_list($la,$lb,$lc = array()){
      $i = $j = 0;$k = 0;
      $len_a = count($la);
      $len_b = count($lb);
      while($i < $len_a && $j < $len_b){
        if($la[$i] <= $lb[$j]){
          $lc[$k] = $la[$i];
          $i++;
        }else{
          $lc[$k] = $lb[$j];
          $j++;
        }
        $k++;
      }
      
      while($i < $len_a){
         $lc[$k] = $la[$i];
         $i++;
         $k++;
      }
      while($j < $len_b){
        $lc[$k] = $lb[$j];
        $j++;
        $k++;
      }
      return $lc;
    }
    var_dump(merge_list($LA,$LB));
    
?>