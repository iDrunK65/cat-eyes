<?php
require_once('../membres/inc/functions.php');
staff_require();
if(!empty($_POST)) { 
    if(empty($_POST['password'])) {
        $errors['password'] = "Vous devez mettre un mot de passe !";
    } else {
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    }
}
?>
<?php require 'inc/header.php'; ?>

<section id="feature" >
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Générateur de mot de passe</h2>
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
            <?php if(!empty($password)): ?>
            <div class="alert alert-success">
            <p><strong>Mot de passe non protéger :</strong></p>
                <ul>
                    <li> <?php echo($_POST['password']); ?></li>
                </ul>
                <p><strong>Mot de passe protéger :</strong></p>
                <ul>
                    <li> <?php echo($password); ?></li>
                </ul>
            </div>
            <?php endif ?>
            <br><br>
        <div class="center wow fadeInDown">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="">Mot de passe</label>
                    <input type="password" name="password" class="form-control"/>
                </div>
                <button type="submit" class="btn btn-primary">Générer</button>
            </form>
        </div>
    </div>
<br><br><br><br><br><br><br><br>
</section>


<?php require 'inc/footer.php'; ?>