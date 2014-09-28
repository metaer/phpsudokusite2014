<?php
ini_set("display_errors", 0);
require_once('init.php');
$actionName = Router::getActionName(strtolower(substr($_SERVER['REQUEST_URI'],1)));
Responser::makeResponse($actionName);