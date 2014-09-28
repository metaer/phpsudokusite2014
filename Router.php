<?php

class Router {
    private static $actionMap = array(
        '' => 'indexAction',
        'about' => 'aboutAction',
        'feedback' => 'feedbackAction',
        'ajax' => 'ajaxAction'
    );

    public static function getMethodName($route) {
        return self::$actionMap[$route] ?: 'notFoundAction';
    }

} 