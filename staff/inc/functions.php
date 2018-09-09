<?php

function debug($variable) {
    echo '<pre>' . print_r($variable, true) . '</pre>';
}

function str_random($length) {
    $alphabet = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
    return substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
}

function login_require() {
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if(!isset($_SESSION['auth'])) {
        $_SESSION['flash']['danger'] = "Vous devez être connecter pour voir cette page !";
        header('Location: http://127.0.0.1/cats-eyes/membres/login.php');
        exit();
    }
}

function staff_require() {
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if(!isset($_SESSION['auth'])) {
        $_SESSION['flash']['danger'] = "Vous devez être connecter pour voir cette page !";
        header('Location: http://127.0.0.1/cats-eyes/membres/login.php');
        exit();
    } else {
        if($_SESSION['auth']->primary_role === 0) {
            $_SESSION['flash']['danger'] = "Vous devez être une membre du staff pour voir cette page !";
            header('Location: http://127.0.0.1/cats-eyes/');
            exit();
        }

    }
}