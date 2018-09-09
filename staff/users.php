<?php
require_once('../membres/inc/functions.php');
require 'inc/header.php';
staff_require();
?>
<table>
    <tr>
        <th>ID</th>
        <th>Pseudo</th>
        <th>Staff</th>
        <th>Date</th>
    </tr>
    <?php
        require_once('inc/db.php');
        $req = $pdo->prepare('SELECT * FROM user ORDER BY id DESC');
        while ($req = mysql_fetch_array($retour)) // On fait une boucle pour lister les news.
        {
        }
    ?>
</table>

<?php require 'inc/footer.php'; ?>