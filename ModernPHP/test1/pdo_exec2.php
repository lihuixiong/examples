<?php
//通过参数连接数据库
try{

    $pdo= new PDO('mysql:host=192.168.10.10;dbname=pdo','homestead','secret');
//     $sql=<<<EOF
//     INSERT user(username,password,email) VALUES("king1","king1","57366377@qq.com"),
//     ("king2","king2","57366377@qq.com"),
//     ("king3","king3","57366377@qq.com"),
//     ("king4","king4","57366377@qq.com")
// EOF;
    $sql='INSERT user(username,password,email) VALUES("king6","king5","5343533@qq.com")';
    $res=$pdo->exec($sql);
    echo '受影响的条数为：' .$res,'<br/>';
    //lastInsertId() 返回最后插入行的ID
    echo '最后插入的ID号为：'.$pdo->lastInsertId();
}catch(PDOException $e){
    echo $e->getMessage();
}