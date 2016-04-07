<?php 
function ListInsert($l,$index,$value){
  if(is_array($l)){
    $l[$index-1] = $value;
  }
  return $l;
}
function GetElem($L,$index,$value){
  if(is_array($L)){
    $value = $L[$index-1];
  }
  return $value;
}

?>