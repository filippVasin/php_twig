<?php

require_once ('core/core.php');

$title = 'Авторизация';
$old = array();

if (!empty($_SESSION['old']['name'])) {
    $old['name'] = $_SESSION['old']['name'];
}

if (!empty($_SESSION['old']['password'])) {
    $old['password'] = $_SESSION['old']['password'];
}

unset($_SESSION['errors']);
unset($_SESSION['old']);


echo $twig->render('login.html', [
    'title' => $title,
    'errors' => $errors,
    'old' => $old,
    ]);
