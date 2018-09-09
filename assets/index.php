<?php // Protection du dossier
    session_start();
    $_SESSION['flash']['danger'] = "Vous n'avez pas à être ici !";
	header('location: ../index.php');
	exit;
