<?php 
require 'library.php';
echo "顺序查找和二分查找";


$la = array(1,2,3,4,5,6,7,8);

var_dump( find_ls($la, 2) );

var_dump( find_bin($la,2) );
?>
