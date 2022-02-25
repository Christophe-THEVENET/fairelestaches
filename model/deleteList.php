<?php

// SUPPRIMER LIST AVEC ID EN BDD ---> RENVOI ACCUEIL

require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php'; // insertion BDD

// _____ connect BDD _____
$pdo = connect();



// sécurisé
$id = trim(htmlspecialchars($_GET['id'], ENT_QUOTES));
// les backtips sont très importants: `list`
$sql = "DELETE FROM `list` WHERE id = :id"; // requete SQL supprime la list avec id passée ds url
$req = $pdo->prepare($sql);
$req->bindParam(":id", $id, PDO::PARAM_INT);
$req->execute();


// redirection sur la page d'acceuil côté client en Javascript puisque si y a $_POST
//c'est qu'il y a envoi du formulaire
?>
<script>
    window.location.href = '../index.php'
</script>