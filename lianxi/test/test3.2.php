<?php
//$arr = array('a','b','c','d',x=>array('A','B','C','D'));
// foreach($arr as $key=>$value){
//    echo $value;
// }
//print_r($arr);
//print_r(array_keys($arr));
//print_r(array_values($arr));

$stu = array('san'=>3,'lisi'=>4,'wang'=>5,'zhao'=>6);
while($row = each($stu)){
   list($key,$value)=$row;
    echo $key,':',"\n";
}
