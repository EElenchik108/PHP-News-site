<?php

// $string = 'Почему всемогущий творец наших тел даровать нам бессмертие не захотел? Если мы совершенны, зачем умираем? Если не совершенны, то кто бракодел?';
// $pattern = '/творец/';
// $result = preg_match($pattern, $string); // - проверяет есть ли регулярное выражение $pattern в строке $string
// var_dump($result);

// echo "You request: " . $_SERVER['REQUEST_URI'];

//1. Вывод ошибок - следующим кодом включаем отображение ошибок, после написания сайта - отключить, чтобы пользователь не видел
ini_set('display_errors', 1);
error_reporting(E_ALL);

//2. Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');

$router = new Router();
$router->run();