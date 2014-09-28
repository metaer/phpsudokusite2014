<?php


class Responser {
    public static function makeResponse($actionName) {
        $controller = new Controller();
        $controller->$actionName();
    }
} 