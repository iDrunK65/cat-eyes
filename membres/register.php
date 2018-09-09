<?php
require 'inc/functions.php';
session_start();
if(!empty($_POST)) {

    $errors = array();
    require_once 'inc/db.php';

    if(empty($_POST['username'])) {
        $errors['username'] = "Vous devez mettre un pseudo !";
    } else {
        if(!preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username'])) {
            $errors['username'] = "Votre pseudo n'est pas valide ! Il doit contenir les carractère suivant. (a-z A-Z 0-9 et _)";
        } else {
            $req = $pdo->prepare('SELECT id FROM users WHERE username = ?');
            $req->execute([$_POST['username']]);
            $user = $req->fetch();
            if($user) {
                $errors['username'] = "Le pseudo est déjà pris !";
            }
        }
    }

    if(empty($_POST['email'])) {
        $errors['email'] = "Vous devez mettre une adresse Email !";
    } else {
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Cet Email n'est pas valide !";
        } else {
            $req = $pdo->prepare('SELECT id FROM users WHERE email = ?');
            $req->execute([$_POST['email']]);
            $user = $req->fetch();
            if($user) {
                $errors['email'] = "L'email est déjà utilisé !";
            }
        }
    }

    if(empty($_POST['password'])) {
        $errors['password'] = "Vous devez mettre un mot de passe !";
    } else {
        if(empty($_POST['password_confirm'])) {
            $errors['password_confirm'] = "Vous devez confirmer votre mot de passe !";
        } else {
            if($_POST['password'] != $_POST['password_confirm']) {
                $errors['password'] = "Les mots de passes ne correspondent pas !";
            }
        }
    }

    if(empty($errors)) {
        $req = $pdo->prepare("INSERT INTO users SET username = ?, password = ?, email = ?, confirmation_token = ?");
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $token = str_random(60);
        $req->execute([$_POST['username'], $password, $_POST['email'], $token]);
        $user_id = $pdo->lastInsertId();
        $pseudo = $_POST['username'];
        mail($_POST['email'], "Confirmation de votre compte > $pseudo", "Bonjour, Bonsoir, $pseudo !\nAfin de valider votre compte merci de cliquer sur ce lien \n\n http://35.242.136.0/membres/confirm.php?id=$user_id&token=$token");
        $_SESSION['flash']['success'] = "Un email de confirmation a été envoyé pour confirmer votre compte.";
        header('Location: login.php');
        exit();
    };

}
?>






<?php require 'inc/header.php'; ?>

<section id="feature" >
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>S'inscrire</h2>
        </div>
            <?php if(!empty($errors)): ?>
            <div class="alert alert-danger">
                <p><strong>Vous avez pas rempli toute les conditions :</strong></p>
                <ul>
                    <?php foreach($errors as $error): ?>
                        <li> <?= $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif ?>
            <br><br>
        <div class="center wow fadeInDown">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="">Pseudo</label>
                    <input type="text" name="username" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">Mot de passe</label>
                    <input type="password" name="password" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="">Confirmation du mot de passe</label>
                    <input type="password" name="password_confirm" class="form-control"/>
                </div>
                <button type="submit" class="btn btn-primary">S'incrire</button>
            </form>
        </div>
    </div>
</section>

<?php require 'inc/footer.php'; ?>