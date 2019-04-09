<?php

// 退出

// 清空SESSION
session_start();
$_SESSION['username'] = null;
// 重定向到登录页面
header("Location: http://huixiong.test/liuyb_admin/login.html");
