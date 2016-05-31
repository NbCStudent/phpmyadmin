<?php

function dbConnect($bddname)
{
    $dsn = "mysql:host=localhost;dbname=$bddname;charset=utf8";
    $user = 'root';
    $password = 'root';

    try {
        $dbh = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    return ($dbh);
}