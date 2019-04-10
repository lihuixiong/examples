<?php
//通过参数连接数据库
try{
    $dsn='mysql:host=192.168.10.10;dbname=pdo';
    $username='homestead';
    $passwd='secret';
    $pdo= new PDO($dsn,$username,$passwd);
    var_dump($pdo);
}catch(PDOException $e){
    echo $e->getMessage();
}