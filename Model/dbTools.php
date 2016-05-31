<?php
/**
 * Created by PhpStorm.
 * User: theo
 * Date: 30/05/16
 * Time: 16:59
 */


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