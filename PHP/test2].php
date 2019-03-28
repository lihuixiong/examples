<?php
//输出100以内的复数，并且以5个为一行打印出来
for($num=1,$c=0;$num<100;$num++){
    if($num%2==0){
        echo $num."  ";
        $c=$c+1;
    }
    if($c%5==0){
        echo "\n";
    }
}
