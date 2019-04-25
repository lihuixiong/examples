<?php
//把数组的值都乘以2
$arr=array(1,2,3,array('c',4,'d',5,array(6,7)));

function multArr($arr){
    foreach($arr as $k=>$v){
        if (is_int($v)){
            $arr[$k]=$v*2;
        }elseif(is_array($v)){
            $arr[$k]=multArr($v);
        }
    }
    return $arr;
}

print_r(multArr($arr));
