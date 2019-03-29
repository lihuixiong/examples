<?php
//小于100可以被3整除的数,且个位数为6
for ($num = 1; $num < 100; $num++) {
    if ($num % 3 == 0 && $num % 10 == 6) {
        echo $num." , ";
    }
}

//输出100以内的复数，并且以5个为一行打印出来
for ($num = 1, $c = 0; $num < 100; $num++) {
    if ($num % 2 == 0) {
        echo $num."  ";
        $c = $c + 1;
    }
    if ($c % 5 == 0) {
        echo "\n";
    }
}

//操场上100多人排队，3人一组多1人，4人一组多2人，5人一组多3人，共多少人？
for ($num = 100; $num < 200; $num++) {
    if ($num % 3 == 1 && $num % 4 == 2 && $num % 5 == 3) {
        echo $num."\n";
    }
}

//两个自然数相除，商3余10，被除数、除数、商余数的和是163，求被除数，除数。
for ($i = 1; $i < 163; $i++) {
    if ($i * 3 + 10 + $i + 3 + 10 == 163) {
        echo "被除数：".'$i*3+10'."；"."除数：".$i."\n";
    }
}

//
// $num=100;
//  for($m=1;$m<=50;$m++){
//      if($num>50){
//          $num=$num-3;
//      }else{
//          $num=$num-1;
//      }
//  }
//  echo '每走'.$m.'米，'.'所剩香蕉数为'.$num."\n";

//打印0-300不包含4的自然数
for ($x = 0; $x < 3; $x++) {
    for ($y = 0; $y < 10; $y++) {
        for ($z = 0; $z < 10; $z++) {
            if ($x != 4 && $y != 4 && $z != 4) {
                echo $x * 100 + $y * 10 + $z.",";
            }
        }
    }
}

//水仙花束
for ($y = 1; $y < 10; $y++) {
    for ($z = 0; $z < 10; $z++) {
        for ($x = 0; $x < 10; $x++) {
            if ($y * $y * $y + $z * $z * $z + $x * $x * $x == $y * 100 + $z * 10 + $x) {
                echo $y * 100 + $z * 10 + $x."\n";
            }
        }
    }
}

//表格
echo '<table border=1>';
for ($a = 1; $a <= 5; $a++) {
    echo '<tr>';
    for ($b = 1; $b <= 4; $b++) {
        echo '<td>单元格</td>';
    }
    echo '</tr>';
}
echo '</table>';
echo "\n";
//有100000现金，每过一个路口交一次费，现金大于50000时每次交%5，小于等于50000时，每次交5000，可以经过多少次路口
for ($a = 1, $m = 100000; $m > 5000; $a++) {
    if ($m > 50000) {
        //$m=$m-$m*0.05;
        $m -= $m * 0.05;
    } else {
        $m -= 5000;
    }
    echo $a, ' : ', $m, "\n";
}
// 百钱买百鸡，公鸡5文每只，母鸡3文一只，小鸡1文3只，每种最少一只，各是多少
// for($g=1;$g<100;$g++){
//     for($m=1;$m<100;$m++){
//         for($x=1;$x<100;$x++){
//             if($g*5+$m*3+$x/3==100&&$g+$m+$x==100){
//                 echo "公鸡：".$g."  母鸡：".$m."  小鸡：".$x."\n";
//             }
//         }
//     }
// }

for($g=1;$g<18;$g++){
    for($m=1;$m<31;$m++){
        $x=100-$g-$m;
            if($g*5+$m*3+$x/3==100){
                echo "公鸡：".$g."  母鸡：".$m."  小鸡：".$x."\n";
            }
    }
}

//九九乘法表
 for($a=1;$a<=9;$a++){
     for($b=1;$b<=$a;$b++){
         echo $b." X ".$a." = ".$a*$b."  ";
     }
     echo "\n";
 }
