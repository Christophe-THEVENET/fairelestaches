<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./favicon.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>fairelestaches</title>
</head>

<body>

    <?php

    include "./database.php";
    $pdo = connect();

    foreach ($pdo->query("SELECT * FROM `list` ORDER BY name") as $list) {  ?>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title" style="color:<?=$list['color']?>"><?= $list['name'] ?></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    <?php
    }
    ?>



</body>

</html>