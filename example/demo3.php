<?php 
echo "<p>
    线性表插入LA 在i位置插入数据 后续位置后移
    LA = (1,2,3,4,5,6) 在第4个位置插入
    </p>";

$LA = array(1,2,3,4,5,6);

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

var_dump(insert_sq($LA, 1, 100));
?>