<?php
/**
dev env;
 */
require_once('dev.php');
/**
Путь к скрипту на сервере;
 */
define('ROOT_PATH', isset($_SERVER['DOCUMENT_ROOT']) && $_SERVER['DOCUMENT_ROOT'] !='' ? $_SERVER['DOCUMENT_ROOT'] : '/../..');
/**
Включаем сессию;
 */
require_once (ROOT_PATH.'/core/session.php');
/**
Включаем БД;
 */
require_once (ROOT_PATH.'/core/db.php');
/**
Доп функции;
 */
require_once (ROOT_PATH.'/core/functions.php');
/**
Подключаем шаблонизатор;
 */
require_once (ROOT_PATH. '/vendor/autoload.php');
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem(ROOT_PATH. '/views');
$twig = new Twig_Environment($loader, array(
    'cache'       => 'compilation_cache',
    'auto_reload' => true
));