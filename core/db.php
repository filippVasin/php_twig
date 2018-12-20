<?php

require_once(ROOT_PATH . '/core/config.php');

if(!isset($pdo)){
    $pdo = new PDO("mysql:host=$host;dbname=$database", $user, $password);
}