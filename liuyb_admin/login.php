<?php

// 登录

if (isset($_SESSION['username'])) {
    //如果已登录，重定向到首页
    header("Location: http://huixiong.test/liuyb_admin/");
    return;
} else {
    //取前端传过来的参数
    $userName = $_POST['username'];
    $password = $_POST['password'];

    if ($userName == 'admin' && $password == 'qwe123') {
        //如果用户名和密码正确
        //设置SESSION
        session_start();
        $_SESSION['username'] = 'admin';
        //重定向到首页
        header("Location: http://huixiong.test/liuyb_admin/");
    } else {
        //登录失败，重定向到登录页面
        header("Location: http://huixiong.test/liuyb_admin/login.html");
    }
}
