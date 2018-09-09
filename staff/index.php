<?php
require_once('inc/functions.php');
require 'inc/header.php';
staff_require();
?>
<h1> test </h1>
<?php 
    if($_SESSION['auth']->primary_role === 1) {
        echo("Oui");
    } else {
        echo("Non"); 
    }
?>
<?php require 'inc/footer.php'; ?>