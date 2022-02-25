<?php
//////////// HEADER /////////////////////
require_once '../templates/header.php'; //
/////////////////////////////////////////
?>

<div class="alert alert-dark m-5 text-center" role="alert">
    Créer une liste
</div>

<?php



// -----CONNECT BDD ET ENVOI FORM -------

if ($_POST) {
    include './database.php';
    $pdo = connect();

    $name = $_POST['name'];
    $color = $_POST['color'];

    // les backtips sont très importants: `list`
    $sql = "INSERT INTO `list` (name, color) VALUES ('{$name}', '{$color}')";
    /* var_dump($sql); pour débuger*/
    $pdo->query($sql);
}



///////// FORMULAIRE ///////////////////
require_once '../templates/form.php'; //
///////////////////////////////////////

//////////// FOOTER /////////////////////
require_once '../templates/footer.php';//
////////////////////////////////////////