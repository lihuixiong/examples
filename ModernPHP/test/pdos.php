<?php

$sql = 'SELECT email FROM users WHERE id = :id';
$statement = $pdo->prepare($sql);

$userId = filter_input(INPUT_GET,'id');
$statement->bindValue(':id',$userId,PDO::PARAM_INT);
