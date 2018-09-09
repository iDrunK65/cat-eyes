<?php
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="fr">

<!-- *****************************************************************************************************************
     HEADER + BARRE DE NAVIGATION COMMUN(E) A TOUTES LES PAGES DU SITE AINSI QUE LES DÉPENDANCES NÉCESSAIRES
     ***************************************************************************************************************** -->

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="iDrunK">

    <link href="http://35.242.136.0/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://35.242.136.0/assets/css/animate.min.css" rel="stylesheet">
    <link href="http://35.242.136.0/assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="http://35.242.136.0/assets/css/main.css" rel="stylesheet">
    <link href="http://35.242.136.0/assets/css/responsive.css" rel="stylesheet">

    <script src="http://35.242.136.0/assets/js/jquery.js"></script>
    <script src="http://35.242.136.0/assets/js/bootstrap.min.js"></script>
    <script src="http://35.242.136.0/assets/js/jquery.prettyPhoto.js"></script>
    <script src="http://35.242.136.0/assets/js/jquery.isotope.min.js"></script>
    <script src="http://35.242.136.0/assets/js/main.js"></script>
    <script src="http://35.242.136.0/assets/js/wow.min.js"></script>
    <script src="https://use.fontawesome.com/aae9d9af0f.js"></script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://35.242.136.0/assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://35.242.136.0/assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://35.242.136.0/assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://35.242.136.0/assets/images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

</head>

<body class="homepage">
    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Afficher la navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><h1>Cat's Eyes</h1></a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li><a href="http://35.242.136.0/"><i class="fas fa-home"></i>&nbsp; Accueil</a></li>
                    <li><a href="http://35.242.136.0/news.php"><i class="far fa-newspaper"></i>&nbsp; Annonce</a></li>
                    <li><a href="http://35.242.136.0/animation.php"><i class="far fa-calendar-alt"></i>&nbsp; Animation</a></li>
                    <li><a href="http://35.242.136.0/serveur.php"><i class="fas fa-server"></i>&nbsp; Serveur</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-angle-double-down"></i>&nbsp; Autres &nbsp;<i class="fas fa-angle-double-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://35.242.136.0/contact.php"><i class="fas fa-users"></i>&nbsp; Nous contacter</a></li>
                            <?php if(isset($_SESSION['auth'])) {
                                if($_SESSION['auth']->primary_role = 1) {
                                    echo('<li><a href="http://35.242.136.0/staff/"><i class="fas fa-user-shield"></i>&nbsp; ok</a></li>');
                                } else {
                                    echo('<li><a href="http://35.242.136.0/staff/"><i class="fas fa-user-shield"></i>&nbsp; Pas ok</a></li>');
                                }
                            } ?>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <?php if(isset($_SESSION['auth'])): ?>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user-circle"></i>&nbsp; <?= $_SESSION['auth']->username ?> &nbsp;<i class="fas fa-angle-double-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="http://35.242.136.0/membres/account.php"><i class="fas fa-user"></i>&nbsp; Mon compte</a></li>
                                <li><a href="http://35.242.136.0/membres/logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp; Se déconnecter</a></li>
                            </ul>
                        <?php else: ?>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user-circle"></i>&nbsp; Visiteur &nbsp;<i class="fas fa-angle-double-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="http://35.242.136.0/membres/login.php"><i class="fas fa-sign-in-alt"></i>&nbsp; Se connecter</a></li>
                                <li><a href="http://35.242.136.0/membres/register.php"><i class="fas fa-user-plus"></i>&nbsp; S'inscrire</a></li>
                            </ul>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
        <!--<div class="spacerbande"></div>
        <div class="container">
            <div align ="center">
                <h3>Prochaine animation<br>21h00<br><strong>Limite Limite</strong></h3>
                <br>
            </div>
        </div>-->
    </nav>
    <div class="spacerbande"></div>
    <?php if(isset($_SESSION['flash'])): ?>
        <?php foreach($_SESSION['flash'] as $type => $message): ?>
            <br>
            <div align="center" class="alert alert-<?= $type; ?>">
                <?= $message; ?>
            </div>
            <div class="spacerbande"></div>
        <?php unset($_SESSION['flash']); ?>
        <?php endforeach; ?>
    <?php endif; ?>

