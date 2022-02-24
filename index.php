<?php

// ---------- HEADER -----------------
require_once './templates/header.php';


// ---------- CONNECT DATABASE -----------------
include "./model/database.php";



$pdo = connect();

foreach ($pdo->query("SELECT * FROM `list` ORDER BY name") as $list) {


    require './templates/card.php';
}
?>


<a href="./model/createList.php" class="btn btn-primary mt-3">Créer une liste</a>




<?php




// ---------- FOOTER -----------------
require_once './templates/footer.php';


?>