<?php
//设置上海时间
date_default_timezone_set('Asia/Shanghai');
//获取参数
$name = isset($_POST['name']) ? $_POST['name'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$content = isset($_POST['content']) ? $_POST['content'] : '';
$now = date('Y-m-d H:i:s');

//校验数据
if (empty($name)) {
    echo'请输入名字';
    return;
}
if (empty($phone)) {
    echo '请输入电话号';
    return;
}
if (empty($content)) {
    echo '请输入留言内容';
    return;
}

//保存留言到数据库
try{
    $dsn = 'mysql:dbname=huixiong;host=127.0.0.1;charset=utf8';
    $pdo = new PDO($dsn,'homestead','secret');
}catch (Exception $e){
    die('系统错误');
}

$sql = <<<EOF
insert into liuyan(name,phone,content,created_at)
values(:name,:phone,:content,:created_at)
EOF;

$prep = $pdo->prepare($sql);
$prep->bindParam(':name', $name, PDO::PARAM_STR);
$prep->bindParam(':phone', $phone, PDO::PARAM_STR);
$prep->bindParam(':content', $content, PDO::PARAM_STR);
$prep->bindParam(':created_at', $now, PDO::PARAM_STR);
$result =$prep->execute();

if ($result) {
    echo '留言成功';
}else {
    echo '留言失败，稍后再试';
}
