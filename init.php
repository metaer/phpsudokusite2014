<?php
set_time_limit(900);
require_once "config.php";

header('Content-Type: text/html; charset=utf-8');
header("Cache-Control: no-cache");
header("Pragma: no-cache");

define('BASE_DIR', __DIR__ . "/");

//Путь к шаблонам
define('TEMPLATES_PATH',BASE_DIR.'templates'."/");

function load_classes($class){
    if (file_exists($class.'.php')) {
        require_once $class.'.php';
    }
}

//Автоподключение классов
spl_autoload_register('load_classes');

require_once 'Controller.php';
require_once 'Templator.php';
require_once 'Router.php';