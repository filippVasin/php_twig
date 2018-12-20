<?php

require_once ('core/core.php');

$filename = uploadImage($_FILES['image']);

$stmt = $pdo->prepare("INSERT INTO images (name, user_id) VALUES (:name, :user_id)");

$result = $stmt->execute([
    'name' => $filename,
    'user_id' => $_SESSION['id']
]);

redirect('list.php');