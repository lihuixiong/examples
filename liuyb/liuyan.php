<?php

// var_dump($_POST);
// exit;

// 设置北京时区
date_default_timezone_set('Asia/Shanghai');

// 获取参数
$name = isset($_POST['name']) ? $_POST['name'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$content = isset($_POST['content']) ? $_POST['content'] : '';
$now = date('Y-m-d H:i:s');

// 校验数据
if (empty($name)) {
    echo '请输入姓名';
    return;
}
if (empty($phone)) {
    echo '请输入电话';
    return;
}
if (empty($content)) {
    echo '请输入留言内容';
    return;
}

// 保存留言到数据库里面

/*
create table liuyan (
id int(10) primary key auto_increment,
name varchar(20) default '',
phone varchar(20) default '',
content varchar(255) default '',
created_at datetime
);
 */

// pdo 连上数据库，插入数据
// insert into ...

try {
    $dsn = 'mysql:dbname=huixiong;host=127.0.0.1;charset=utf8';
    $pdo = new PDO($dsn, 'homestead', 'secret');
} catch (Exception $e) {
    // TODO: 记录日志
    // die($e->getMessage());
    die('系统错误');
}

$sql = <<<EOF
insert into liuyan(name, phone, content, created_at)
values(:name, :phone, :content, :created_at)
EOF;

$prep = $pdo->prepare($sql);
$prep->bindParam(':name', $name, PDO::PARAM_STR);
$prep->bindParam(':phone', $phone, PDO::PARAM_STR);
$prep->bindParam(':content', $content, PDO::PARAM_STR);
$prep->bindParam(':created_at', $now, PDO::PARAM_STR);
$result = $prep->execute();
// var_dump($result);

if ($result) {
    echo '留言成功';
} else {
    echo '留言失败，请稍后再试';
}
