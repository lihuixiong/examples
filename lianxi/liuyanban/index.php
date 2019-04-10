<?php
try{
    $dsn = 'mysql:dbname=huixiong;host=127.0.0.1;charset=utf8';
    $pdo = new PDO($dsn, 'homestead', 'secret');
} catch(Exception $e) {
    die('系统错误');
}
$sql = 'select * from liuyan order by id desc';
$statement = $pdo->prepare($sql);
$statement->execute();

$list = [];
while(($result = $statement->fetch(PDO::FETCH_ASSOC)) !==false){
    $list[] = $result;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UtF-8">
    <title>留言板</title>
</head>
<body>
<div id="app">
    <!--留言表单-->
    <div id="liuyan">
        <form method="post" action="liuyan.php">
            姓名：<input type="text" name="name"><br>
            电话：<input type="text" name="phone"><br>
            留言：<textarea name="content"></textarea><br>
            <input type="submit" value="提交">
        </form>
    </div><!--留言表单-->
    <div id="list">
        <ul>
            <?php foreach ($list as $item) { ?>
            <li>
                姓名：<?php echo $item['name']; ?><br>
                电话：<?php echo $item['phone']; ?><br>
                留言时间：<?php echo $item['created_at']; ?><br>
                留言内容：<?php echo $item['content']; ?><br>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>
</body>
</html>