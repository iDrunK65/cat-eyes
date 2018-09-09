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

    <link href="http://127.0.0.1/cats-eyes/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://127.0.0.1/cats-eyes/assets/css/animate.min.css" rel="stylesheet">
    <link href="http://127.0.0.1/cats-eyes/assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="http://127.0.0.1/cats-eyes/assets/css/main.css" rel="stylesheet">
    <link href="http://127.0.0.1/cats-eyes/assets/css/responsive.css" rel="stylesheet">

    <script src="http://127.0.0.1/cats-eyes/assets/js/jquery.js"></script>
    <script src="http://127.0.0.1/cats-eyes/assets/js/bootstrap.min.js"></script>
    <script src="http://127.0.0.1/cats-eyes/assets/js/jquery.prettyPhoto.js"></script>
    <script src="http://127.0.0.1/cats-eyes/assets/js/jquery.isotope.min.js"></script>
    <script src="http://127.0.0.1/cats-eyes/assets/js/main.js"></script>
    <script src="http://127.0.0.1/cats-eyes/assets/js/wow.min.js"></script>
    <script src="https://use.fontawesome.com/aae9d9af0f.js"></script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://127.0.0.1/cats-eyes/assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://127.0.0.1/cats-eyes/assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://127.0.0.1/cats-eyes/assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://127.0.0.1/cats-eyes/assets/images/ico/apple-touch-icon-57-precomposed.png">
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
                <a class="navbar-brand" href="http://127.0.0.1/cats-eyes/staff/"><h1>Espace Staff</h1></a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li><a href="http://127.0.0.1/cats-eyes/staff/"><i class="fas fa-home"></i>&nbsp; Accueil</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user-circle"></i>&nbsp; <?= $_SESSION['auth']->username ?> &nbsp;<i class="fas fa-angle-double-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://127.0.0.1/cats-eyes/membres/account.php"><i class="fas fa-user"></i>&nbsp; Mon compte</a></li>
                            <li><a href="http://127.0.0.1/cats-eyes/membres/logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp; Se déconnecter</a></li>
                        </ul>
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

