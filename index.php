<?php
// ---------------------- HEADER ----------------------------------
require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';
// ----------------------------------------------------------------



// ---- CONNECT DATABASE ------
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
$pdo = connect();
?>

<main class=" container d-flex justify-content-around p-1 flex-wrap">

    <?php
    foreach ($pdo->query("SELECT * FROM `list` ORDER BY name") as $list) {
        // ---------------------- FOOTER -----------------------------
        include $_SERVER['DOCUMENT_ROOT'] . '/templates/card.php';
        // -----------------------------------------------------------
    }
    ?>

</main>
<a href="./pages/createList.php" class="btn btn-primary m-3">Créer une liste</a>




<?php
// ---------------------- FOOTER -----------------------------
require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';
// -----------------------------------------------------------
?>