<?php
/**
 * Created by PhpStorm.
 * User: theo
 * Date: 30/05/16
 * Time: 16:59
 */


function dbConnect($bddname)
{
<<<<<<< HEAD
    $dsn = "mysql:host=localhost;dbname=$bddname;charset=utf8";
=======
    $dsn = "mysql:dbname=$bddname;host=127.0.0.1";
>>>>>>> 28f68e3c7317f45fa39745e0fb4af7da6eb306c0
    $user = 'root';
    $password = 'root';

    try {
        $dbh = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    return ($dbh);
}