<?php
//查询留言
try {
    $dsn = 'mysql:dbname=huixiong;host=127.0.0.1;charset=utf8';
    $pdo = new PDO($dsn, 'homestead', 'secret');
} catch (Exception $e) {
    // TODO: 记录日志
    // die($e->getMessage());
    die('系统错误');
}
$sql = 'select * from liuyan order by id desc';
$statement = $pdo->prepare($sql);
$statement->execute();

$list = [];
while (($result = $statement->fetch(PDO::FETCH_ASSOC)) !==false){
    $list[] = $result;
}

// var_dump($list);
// exit;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>liuyiban</title>
    <style>
        #list ul li {
            padding: 10px 0;
        }
        #imgCaptcha:hover {
            cursor: pointer;
        }
    </style>
</head>
<body>
<div id="app">
    <!-- 留言表单 -->
    <div id="liuyan">
        <form method="post" action="liuyan.php">
            姓名：<input type="text" name="name"><br>
            电话：<input type="text" name="phone"><br>
            留言：<textarea name="content"></textarea><br>
            验证码：<input type="text" name="captcha"> <img id="imgCaptcha" src="captcha.php" alt="" onclick="changeCaptcha()">
            <a href="javascript:;" onclick="changeCaptcha()">看不清，换一张图片</a><br>
            <input type="submit" value="提交">
        </form>
    </div>
    <!-- 显示留言列表 -->
    <div id="list">
        <ul>
            <?php foreach ($list as $item) { ?>
            <li>
                姓名：<?php echo $item['name']; ?><br>
                电话：<?php echo $item['phone']; ?><br>
                留言时间：<?php echo $item['created_at']; ?><br>
                留言内容:<?php echo $item['content']; ?>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>
<script type="text/javascript">
    function changeCaptcha() {
        var date = new Date();
        var imgCaptcha = document.getElementById('imgCaptcha');
        imgCaptcha.src = 'captcha.php?t=' + date.getTime();
    }
</script>
</body>
</html>
