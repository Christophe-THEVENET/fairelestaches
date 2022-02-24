<?php


require_once './templates/header.php';

include "./model/database.php";
$pdo = connect();

foreach ($pdo->query("SELECT * FROM `list` ORDER BY name") as $list) {


    require './templates/card.php';
}
?>


<a href="./createList.php" class="btn btn-primary mt-3">Créer une liste</a>


<?php

require_once './templates/footer.php';


?>