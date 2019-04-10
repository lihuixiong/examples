<?php
//通过参数连接数据库
try{

    $pdo= new PDO('mysql:host=192.168.10.10;dbname=pdo','homestead','secret');
    $sql='update user set username="imooc" where id=1';
    $res=$pdo->exec($sql);
    var_dump($res);
    echo$res.'条记录影响';
}catch(PDOException $e){
    echo $e->getMessage();
}