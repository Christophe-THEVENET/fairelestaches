<?php

function connect() // connecte le site web à la BDD
{

    $dbName = 'fairelestaches'; // Nom de la BDD
    $dbHost = 'fairelestaches.com'; // Nom de l'hote
    $port = '3306'; // ou '8889'
    $dbUsername = 'root'; // Nom d'utilisateur MySQL
    $dbUserPassword = ''; // Mot de passe MySQL
    $cont = null;


    try {
        // On crée un objet PDO à l'aide des identifiants de connexion à la BDD
        $cont = new PDO(
            "mysql:host={$dbHost};dbname={$dbName};port={$port}", // nouvelle concaténation avec accolade 
            $dbUsername,
            $dbUserPassword
        );
    } catch (PDOException $e) {
        die($e->getMessage());
    }

    return $cont; // Renvoie un objet issue de la connection PDO à la BDD
}
