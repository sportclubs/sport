<?php

// FRONT COTROLLER

// 1. Общие настройки

ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Подключение файлов системы

define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Autoload.php');
session_start();
// 3. Установка соединения с БД


// 4. Вызор Router

$router = new Router();
$router->run();

/*
		New fixes in fix branch
*/
$router->Report();
$router->ExecNewFunc();
if ($a == 1){
	echo "Yes, correct";
}
$router->ExitFunc();

echo '
		<a class="nav__item" href="/catalog/pereplyot/"> Переплет </a>
		<a class="nav__item" href="/catalog/laminirovanie/"> Персонализация </a>
		<a class="nav__item" href="/catalog/personalizaciya/"> Ламинация </a>
		<a class="nav__item" href="/catalog/prochee/"> Прочее </a>
		
';

/**
	Here will be the list of text functions
	
*/

for ($i=1;$i<=10;$i++){
		echo "i=".$i."<br>";
}