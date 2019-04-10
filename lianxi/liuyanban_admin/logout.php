<?php
session_start();
$_SESSION['username'] = null;
header("Location: http://huixiong.test/lianxi/liuyanban_admin/login.html");