<?php

header('content-type:text/html;charset=utf-8');
$str='hello king';
//检测变量是否为字符串
var_dump(is_string($str));
//字符串的长度
echo strlen($str);
echo "\n";
$username="gKING A BAG, Hello wang, good BYE.";
//将字符串转化为小写
 echo strtolower($username)."\n";
//将字符串转化为大写
 echo strtoupper($username)."\n";
//将字符串首字母转化为大写
 echo ucfirst($username)."\n";
//将每个单词首字母转化为大写
 echo ucwords($username)."\n";
