<?php
require_once('inc/functions.php');
login_require();
?>

<?php require 'inc/header.php'; ?>

<section id="feature" >
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Votre compte</h2>
        </div>

        <h3><strong>ID du compte :</strong> <?= $_SESSION['auth']->id ?></h3>
        <h3><strong>Pseudo :</strong> <?= $_SESSION['auth']->username ?></h3>
        <h3><strong>Creéation du compte :</strong> <?= $_SESSION['auth']->confirmed_at ?></h3>
        <h3><strong>Staff :</strong> 
        <?php if($_SESSION['auth']->staff === 0) {
            echo("Non");
        } else {
            echo("Oui");
        }
        ?></h3>
        <?php debug($_SESSION); ?>
    </div>
</section>

<?php require 'inc/footer.php'; ?>