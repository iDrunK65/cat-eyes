<?php
    $user_id = $_GET['id'];
    $token = $_GET['token'];
    require_once('inc/db.php');
    $req = $pdo->prepare('SELECT * FROM users WHERE id = ?');
    $req->execute([$user_id]);
    $user = $req->fetch();
    session_start();

    if($user && $user->confirmation_token == $token) {
        session_start();
        $pdo->prepare('UPDATE users SET confirmation_token = NULL, confirmed_at = NOW() WHERE id = ?')->execute([$user_id]);
        $_SESSION['flash']['success'] = "Votre compte a été confirmé. Vous pouvez vous connecter.";
        header('Location: login.php');
    } else {
        $_SESSION['flash']['danger'] = "Ce lien n'est pas valide !";
        header('Location: ../index.php'); 
    }