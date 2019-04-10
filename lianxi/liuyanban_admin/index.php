<?php
//管理页面
//登录
session_start();
if(! isset($_SESSION['username'])) {
    header("Location: http://huixiong.test/lianxi/liuyanban_admin/login.html");
    return;
}

?>

<div>
    <span>欢迎您，<?php echo $_SESSION['username']; ?></span>
    <a href="logout.php">退出</a>
</div>
