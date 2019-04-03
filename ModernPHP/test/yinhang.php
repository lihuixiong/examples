<?php

include('../settings.php');
//PDO连接
try {
    $pdo = new PDO(
        sprintf(
            'mysql:host=%s;port=%s;dbname=%s;charset=%s',
            $settings['host'],
            $settings['port'],
            $settings['name'],
            $settings['charset']
        ),
        $settings['username'],
        $settings['password']
    );
} catch (PDOException $e) {
    //连接数据库失败
    echo "Database connection failed";
    var_dump($e->getMessage());
    exit;
}
//查询语句
$stmtSubtract = $pdo->prepare('
    UPDATE accounts
    SET amount = amount - :amount
    WHERE name = :name
');
$stmtAdd = $pdo->prepare('
    UPDATE accounts
    SET amount = amount + :amount
    WHERE name = :name
');
//开始事务
$pdo->beginTransaction();

//从账户1中取钱
$fromAccount = 'Checking';
$withDrawa1 = 50;
$stmtSubtract->bindParam(':name',$fromAccount);
$stmtSubtract->bindParam(':amount',$withDrawa1, PDO::PARAM_INT);
$stmtSubtract->execute();
//把钱存入账户2
$toAccount = 'Savings';
$deposit = 50;
$stmtAdd->bindParam(':name',$toAccount);
$stmtAdd->bindParam(':amount',$deposit, PDO::PARAM_INT);
$stmtAdd->execute();
//提交事务
$result = $pdo->commit();
var_dump($result);
