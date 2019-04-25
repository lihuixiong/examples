<?php
// function xuexi()
// {
//     echo "好好学习";
// }
//
// function chifan()
// {
//     echo "好好吃饭";
// }
//
// xuexi();
// echo "\n";
// $woxiang = chifan();

// $a = 10;
// $b = ++$a;
// echo $a.$b;
//过路口
// for ($i = 1, $money = 100000; $money >= 5000; $i++) {
//     if ($money > 50000) {
//         $money = $money - $money * 0.05;
//     } else if ($money <= 50000) {
//         $money = $money - 5000;
//     }
//     echo '当经过',$i,'次路口时，所剩钱数为',$money,"\n";
// }
//99乘法表
// for ($num=1;$num<=9;$num++){
//     //echo $num;
//     for ($a=1;$a<=$num;$a++){
//         echo $a,' * ',$num,' = ',$num*$a,'   ';
//     }
//     echo "\n";
// }
//百钱买百鸡
//$g+$m+$x == 100;
//$g*5+$m*3+$x/3 ==100;
// for ($g=1;$g<20;$g++){
//     for ($m=1;$m<33;$m++){
//         $x=100-$g-$m;
//            if ($g*5+$m*3+$x/3 ==100){
//                 echo '公鸡',$g,'母鸡',$m,'小鸡',$x,"\n";
//             }
//
//     }
// }

//小羊繁殖
// $arr = array(1,0,0,0,0);
// for ($i=1;$i<=20;$i++){
//     array_pop($arr);
//     array_unshift($arr,0);
//     $arr[0]=$arr[2]+$arr[4];
// }
// print_r($arr);
// echo array_sum($arr);

//print_r($_SERVER);
defined('PI')||define('PI',3.1415926);
var_dump(defined('PI'));
echo PI+5;