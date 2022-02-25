<?php
// ---------------------- HEADER ----------------------------------
require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';
// ----------------------------------------------------------------
?>

<div class="alert bg-gradient-primary m-1 mb-5" role="alert">
    Créer une liste de taches
</div>

<?php



// -----CONNECT BDD ET ENVOI FORM -------

if ($_POST) { // si on a un envoi formulaire = click btn submit
    require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
    $pdo = connect(); // connection BDD

    $name = $_POST['name'];
    $color = $_POST['color'];

    // les backtips sont très importants: `list`
    $sql = "INSERT INTO `list` (name, color) VALUES ('{$name}', '{$color}')"; // requete SQL
    /* var_dump($sql); pour débuger*/
    $pdo->query($sql); // insertion en BDD



    // redirection sur la page index.php côté client en Javascript puisque si y a $_POST
    //c'est qu'il y a envoi du formulaire
?>
    <script>
        window.location.href = '../index.php'
    </script>

<?php
}



// ---------------------- FORM -----------------------------
require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/form.php';
// -----------------------------------------------------------


// ---------------------- FOOTER -----------------------------
require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';
// -----------------------------------------------------------
