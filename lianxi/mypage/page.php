<?php

//1传入页码
$page = isset($_GET['p']) ? $_GET['p'] : 1;

$pageSize = 5;
if($page<=1){
    $offset = 0;
}else {
    $offset = ($page-1) * $pageSize;
}


//根据页码取出数据
try{
    $dsn = 'mysql:dbname=lixiong;host=127.0.0.1;charset=utf8';
    $pdo = new PDO($dsn,'homestead','secret');
}catch (Exception $e){
    die('系统错误');
}
$sql = "select * from page limit {$pageSize} offset {$offset}";
$statement = $pdo->prepare($sql);
$statement->execute();

$list = [];
while(($result = $statement->fetch(PDO::FETCH_ASSOC)) !==false){
    $list[] = $result;
}
var_dump($list);



//mysql_select_db()
//显示数据+分页条





