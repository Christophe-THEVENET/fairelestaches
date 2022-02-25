<?php

// SUPPRIMER LIST AVEC ID EN BDD ---> RENVOI ACCUEIL

// _______ connect BDD ________
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
$pdo = connect();


// les backtips sont très importants: `list`
$sql = "DELETE FROM `list` WHERE id = {$_GET['id']}"; // requete SQL supprime la list avec id passée ds url
$req = $pdo->prepare($sql);
$req->execute();


// redirection sur la page index.php côté client en Javascript puisque si y a $_POST
//c'est qu'il y a envoi du formulaire
?>
<script>
    window.location.href = '../index.php'
</script>