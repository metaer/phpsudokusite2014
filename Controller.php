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
        $post_message = &$_POST['message'];
        $submitted = !is_null($post_message);
        $valid = !is_null($post_message) && $post_message !== "";
        $message = $valid ? $post_message : null;
        $mailingResult = false;
        if ($submitted) {
            $mailingResult = Mail::send($message);
        }
        $answer = "";
        if ($submitted) {
            if (!$valid) {
                $answer = "Сообщение не должно быть пустым";
            } else {
                if ($mailingResult) {
                    $answer = "Ваше сообщение успешно отправлено";
                } else {
                    $answer = "При отправке сообщения возникла ошибка. Сообщите, пожалуйста, по номеру +79164753944";
                }
            }
        }
        $this->render('feedback.phtml', array(
            'title' => 'Решатель судоку. Обратная связь',
            'active' => 'feedback',
            'answer' => $answer
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