<?php
//通过参数连接数据库
try{

    $pdo= new PDO('mysql:host=192.168.10.10;dbname=pdo','homestead','secret');
    $sql=<<<EOF
    CREATE TABLE IF NOT EXISTS user(
    id INT UNSIGNED AUTO_INCREMENT KEY,
    username VARCHAR(20) NOT NULL UNIQUE,
    password CHAR(32) NOT NULL,
    email VARCHAR(30) NOT NULL
    );
EOF;
    $res = $pdo->exec($sql);
    var_dump($res);
    $sql='INSERT user(username,password,email) VALUES("king","'.md5('king').'","502826799@qq.com")';
    $res=$pdo->exec($sql);
    echo $res;
}catch(PDOException $e){
    echo $e->getMessage();
}