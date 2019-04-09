<?php

// 管理页面

// 判断是否已登录，如果没有登录，跳转到登录界面
session_start();
if (! isset($_SESSION['username'])) {
    header("Location: http://huixiong.test/liuyb_admin/login.html");
    return;
}

?>

<div>
    <span>欢迎, <?php echo $_SESSION['username']; ?></span>
    <a href="logout.php">退出</a>
</div>
