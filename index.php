<?php
// ---------------------- HEADER ----------------------------------
require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';
// ----------------------------------------------------------------



// _______ connect BDD ________
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
$pdo = connect();
?>

<main class="  d-flex  justify-content-around p-1 flex-wrap container">



    <?php
// ________ affiche les cards de la BDD _________
    foreach ($pdo->query("SELECT * FROM `list` ORDER BY name") as $list) {
        // ---------------------- CARD -----------------------------
        include $_SERVER['DOCUMENT_ROOT'] . '/templates/card.php';
        // -----------------------------------------------------------
    }
    ?>

</main>




<?php
// ---------------------- FOOTER -----------------------------
require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';
// -----------------------------------------------------------
?>