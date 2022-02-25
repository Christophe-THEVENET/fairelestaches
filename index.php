<?php

//////////// HEADER /////////////////////
require_once './templates/header.php'; //
////////////////////////////////////////

// ---- CONNECT DATABASE ------
include "./model/database.php";

$pdo = connect();
?>

<main class="d-flex justify-content-around p-5 flex-wrap">

    <?php
    foreach ($pdo->query("SELECT * FROM `list` ORDER BY name") as $list) {




        //////////// CARD ////////////////
        require './templates/card.php'; //
        /////////////////////////////////


    }
    ?>
</main>

<a href="./pages/createList.php" class="btn btn-primary m-5">Créer une liste</a>




<?php




//////////// FOOTER /////////////////////
require_once './templates/footer.php'; //
////////////////////////////////////////

?>