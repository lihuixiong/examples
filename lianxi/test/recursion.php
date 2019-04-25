<?php
//创建查看某个路径下的所有文件的函数
function showDir($path,$lev=0){
    $fh=opendir($path);//打开句柄
    while(($row=readdir($fh))!==false){//从目录句柄中读取条目
        if ($row=='.'||$row=='..'){
        continue;//在循环结构用用来跳过本次循环中剩余的代码并在条件求值为真时开始执行下一次循环
        }
        echo str_repeat('&nbsp;&nbsp;',$lev),$row,"\n";//str_repeat重复一个字符串
        if (is_dir($path.'/'.$row)){//判断给定文件名是否是一个目录
            showDir($path.'/'.$row,$lev+1);
        }
    }
    closedir($fh);//关闭句柄
}
showDir('./');//调用函数
