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

    echo  '<script>window.location.href = "../index.php"</script>';
?>



    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Fluid jumbotron</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>



<?php
}






// ---------------------- FORM -----------------------------
require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/formCreateList.php';
// -----------------------------------------------------------


// ---------------------- FOOTER -----------------------------
require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';
// -----------------------------------------------------------
