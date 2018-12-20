<?php


require_once ('core/core.php');

if (empty($_POST['name'])) {
    $_SESSION['errors'][] = 'Введите логин';
}

if (empty($_POST['password'])) {
    $_SESSION['errors'][] = 'Введите пароль';
}

if (!empty($_SESSION['errors'])){

    redirect('/login.php');
}

$stmt = $pdo->prepare("SELECT * FROM users WHERE name = :name AND password = :password");

$result = $stmt->execute([
    'name' => $_POST['name'],
    'password' => MD5($_POST['name'].$_POST['password'])
]);

$result = $stmt->FETCH(PDO::FETCH_ASSOC);


 if($stmt->rowCount() >= 1){
    $_SESSION['id'] = $result['id'];
    redirect('list.php');
} else {
     $_SESSION['errors'][] = 'Неверный логин или пароль';
    redirect('/login.php');
}
