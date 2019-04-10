<?php
try{
    $dsn = 'mysql:dbname=huixiong;host=127.0.0.1;charset=utf8';
    $username='homestead';
    $passwd='secret';
    $pdo = new PDO($dsn,'homestead','secret');
}catch (Exception $e){
    die('系统错误');
}
$sql = 'select * from huixiong';
$statement = $pdo->prepare($sql);
$statement->execute();
