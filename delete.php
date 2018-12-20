<?php

require_once ('core/core.php');

$stmt = $pdo->prepare("SELECT * FROM images WHERE id = :id  AND user_id = :user_id");

$res = $stmt->execute([
    'id' => $_GET['id'],
    'user_id' => $_SESSION['id'],
]);

$images = $stmt->FETCH(PDO::FETCH_ASSOC);

$filename =  $images['name'];

$stmt = $pdo->prepare("DELETE FROM images WHERE id = :id  AND user_id = :user_id");

$stmt->execute([
    'id' => $_GET['id'],
    'user_id' => $_SESSION['id'],
]);

if ($stmt->rowCount() >= 1) {
    unlink(ROOT_PATH.'/upload/'.$filename);
    unlink(ROOT_PATH.'/upload/min_'.$filename);
    $_SESSION['messages'][] = 'Картинка удалена';
} else {
    $_SESSION['errors'][] = 'Вероятно у вас не хватает прав';
}

redirect('list.php');