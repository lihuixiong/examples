<?php
//php正则表达式函数
function show($var = null){
    if(empty($var)){
        echo 'null';
    }elseif(is_array($var) || is_object($var)){
        //array,object
        echo '<pre>';
        print_r($var);
        echo '<pre>';
    }else {
        //string,int,float
        echo $var;
    }
}