<?php


class Controller {
    private $templator;
    
    public function __construct() {
        $this->templator = new Templator();
    }
    
    public function indexAction() {
        $this->addCss("/assets/index.css?".uniqid());
        $this->addJs("/assets/index.js?".uniqid());
        $this->render('index2.phtml', array(
            'title' => 'Решатель судоку. Главная',
            'active' => 'index'
        ));
    }

    public function aboutAction() {
        $this->render('about.phtml', array(
            'title' => 'Решатель судоку. О программе',
            'active' => 'about'
        ));
    }

    public function feedbackAction() {
        $this->render('feedback.phtml', array(
            'title' => 'Решатель судоку. Обратная связь',
            'active' => 'feedback'
        ));
    }

    public function notFoundAction() {
        header("HTTP/1.1 404 Not Found");
        die('404. Не найдено');
    }
    
    private function render($template, $data) {
        echo $this->templator->render($template, $data);
    }

    private function addCss($css) {
        $this->templator->addCss($css);
    }

    private function addJs($js) {
        $this->templator->addJs($js);
    }
}