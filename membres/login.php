<?php require_once 'inc/functions.php'; ?>

<?php
    if(isset($_SESSION['auth'])){
        header('Location: account.php');
        exit();
    }
    if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])) {
        require_once 'inc/db.php';
        $req = $pdo->prepare('SELECT * FROM users WHERE (username = :username OR email = :username) AND confirmed_at IS NOT NULL');
        $req->execute(['username' => $_POST['username']]);
        $user = $req->fetch();
        if(!empty($user) && password_verify($_POST['password'], $user->password)){ 
            session_start();
            $_SESSION['auth'] = $user;
            $_SESSION['flash']['success'] = "Vous êtes maintenant connecter.";
            header('Location: account.php');
            exit();
        } else {
            $_SESSION['flash']['danger'] = "Indentifiants ou mot de passe incorect !";
        }
    } else {
        $errors['auth'] = "Tous les champs doivent être remplis !";
    }


?>
<?php require 'inc/header.php'; ?>

<section id="feature" >
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Se connecter</h2>
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
                    <label for="">Pseudo ou Email</label>
                    <input type="text" name="username" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">Mot de passe</label>
                    <input type="password" name="password" class="form-control"/>
                </div>
                <button type="submit" class="btn btn-primary">Se connecter</button>
            </form>
            <br ><br ><br ><br ><br ><br ><br >
        </div>
    </div>
</section>

<?php require 'inc/footer.php'; ?>