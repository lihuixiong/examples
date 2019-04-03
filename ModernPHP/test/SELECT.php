<?php

$sql = 'SELECT id, email FROM users WHERE email = :email';
$statement = $pdo->prepare($sql);
$email = filter_input(INPUT_GET,'email');
$statement->bindValue(':email',email,PDO::PARAM_INT);
$statement->execute();

while (($result = $statement->fetch(PDO::FETCH_ASSOC)) !==false){
    echo $result['email'];
}
