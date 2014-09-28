<?php


class Mail {
    public static function send($message,$theme = 'Сообщение с сайта судоку',$from = 'sudoku@sudoku24.ru',$to = WEBMASTER_EMAIL) {
        return mail($to,$theme,$message,"From: ".$from);
    }
} 