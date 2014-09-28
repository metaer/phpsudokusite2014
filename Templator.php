<?php

class Templator {
    private $css = array();
    private $js = array();
    public function render($template, $data) {
        extract($data);
        include TEMPLATES_PATH . "general/general.phtml";
    }

    public function addCss($css) {
        $this->css[] = $css;
    }

    public function addJs($js) {
        $this->js[] = $js;
    }
}