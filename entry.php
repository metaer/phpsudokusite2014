<?php
ini_set("display_errors", 0);
require_once('init.php');
$actionName = Router::getMethodName(strtolower(substr(explode('?',$_SERVER['REQUEST_URI'])[0],1)));
Responser::makeResponse($actionName);