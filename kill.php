<?php
session_start();
session_destroy();
session_start();
$_SESSION['flash']['success'] = "Session reset avec succès.";
header('Location: index.php');