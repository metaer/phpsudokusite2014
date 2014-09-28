<?php

class Router {
    private static $actionMap = array(
        '' => 'indexAction',
        'about' => 'aboutAction',
        'feedback' => 'feedbackAction'
    );

    public static function getActionName($route) {
        return self::$actionMap[$route] ?: 'notFoundAction';
    }

} 