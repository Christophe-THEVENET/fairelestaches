<?php
// ---------------------- HEADER ----------------------------------
require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';
// ----------------------------------------------------------------


// ______ connect / envoi nouvelle list -> BDD _______

if ($_POST) { // si on a un envoi formulaire = click btn submit
    require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';
    $pdo = connect(); // connection BDD

    $name = $_POST['name'];
    $color = $_POST['color'];

    // les backtips sont très importants: `list`
    $sql = "INSERT INTO `list` (name, color) VALUES (:name, :color)"; // requete SQL !!! les : pour securiser
    /* var_dump($sql); pour débuger*/
    //$pdo->query($sql); //  pas sécurisé insertion en BDD
    // methode sécurisé:
    $req = $pdo->prepare($sql);
    $req->bindParam(":name", $name, PDO::PARAM_STR); // on type en string
    $req->bindParam(":color", $color, PDO::PARAM_STR); // on type en string
    $req->execute();

    // redirection sur la page index.php côté client en Javascript puisque si y a $_POST
    //c'est qu'il y a envoi du formulaire
?>
    <script>
        window.location.href = '../index.php'
    </script>

<?php
}


// ---------------------- FORM UPDATE LIST -----------------------------
require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/formUpdateList.php';
// -----------------------------------------------------------


// ---------------------- FOOTER -----------------------------
require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';
// -----------------------------------------------------------
