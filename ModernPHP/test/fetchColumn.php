<?php

$sql = 'SELECT id, email FROM users WHERE email = email';
$statement = $pdo->prepare($sql);
$email = filter_input(INPUT_GET,'email');
$statement->bindValue(':email',email,PDO::PARAM_INT);
$statement->execute();

// while (($email = $statemet->fetchColumn(1)) !==false){
//         echo $email;
    while (($email = $statemet->fetchObject()) !==false){
        echo $result->name;

}
