<?php
//登录
if(isset($_SESSION['username'])){
    header("Location: http://huixiong.test/lianxi/liuyanban_admin/index.php");
    return;
}else {
    $userName = $_POST['username'];
    $password = $_POST['password'];

    if($userName == 'xiong' && $password == 'x123') {
        session_start();
        $_SESSION['username'] = 'xiong';
        header("Location: http://huixiong.test/lianxi/liuyanban_admin/");
    }else {
        header("Location: http://huixiong.test/lianxi/liuyanban_admin/login.html");
    }
}
