<?php

require_once ('core/core.php');

$title = 'Картинки';
$old = array();

$stmt = $pdo->prepare("SELECT * FROM images WHERE user_id = :user_id");

$result = $stmt->execute([
    'user_id' => $_SESSION['id'],
]);

$images = $stmt->FETCHALL(PDO::FETCH_ASSOC);

echo $twig->render('list.html', [
    'title' => $title,
    'messages' => $messages,
    'errors' => $errors,
    'images' => $images,
]);


