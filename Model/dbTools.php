<?php

function dbConnect($bddname)
{
    $dsn = "mysql:host=127.0.0.1;dbname=$bddname;charset=utf8";
    $user = 'root';
    $password = 'root';

    try {
        $dbh = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    return ($dbh);
}
function GetAllDB($co)
{
    $sql = $co->query('SELECT table_schema FROM TABLES GROUP BY table_schema');
    $result = $sql->fetchAll(PDO::FETCH_COLUMN);
    return ($result);
}
function GetTableDB($db,$dbname)
{
    $sql = $db->query("SELECT TABLE_NAME FROM TABLES WHERE TABLE_SCHEMA = '".$dbname."'");
    $result = $sql->fetchAll(PDO::FETCH_COLUMN);
    return ($result);
}