<?php

// Every functions related to databases

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

function GetAllDB($co)
{
    $sql = $co->query('SHOW DATABASES');
    $result = $sql->fetchAll(PDO::FETCH_COLUMN);
    return ($result);
}

function GetTableDB($db,$dbname)
{
    $sql = $db->query("SELECT TABLE_NAME,DATA_LENGTH,CREATE_TIME,TABLE_ROWS,TABLE_TYPE,TABLE_COLLATION FROM TABLES WHERE TABLE_SCHEMA = '" . $dbname . "'");
    $result = $sql->fetchAll();
    return ($result);
}

function deleteBDD($db,$dbname)
{
  $sql = $db->query("DROP DATABASE $dbname");
  return ($sql);
}

function GetStatsDB($db,$dbname)
{
  $sql = $db->query("SELECT COUNT(TABLE_NAME) as nb_table,SUM(DATA_LENGTH) as sum_length,MIN(CREATE_TIME) as create_time FROM TABLES WHERE TABLE_SCHEMA ='".$dbname."'");
  $result = $sql->fetchAll(PDO::FETCH_ASSOC);
  return ($result);
}

function renameDB($bdd)
{
  if ($bdd['newname'] != $bdd['oldname'])
  {
    $db = dbConnect("information_schema");
    $newname = $bdd['newname'];
    $sql = $db->query("CREATE DATABASE $newname");
    $tables = GetTableDB($db,$bdd['oldname']);
    foreach ($tables as $key => $value) {
      $sql = 'RENAME TABLE ' . $bdd['oldname'] . '.' . $value["TABLE_NAME"] . ' TO ' . $bdd['newname'] . '.' . $value["TABLE_NAME"];
      $result = $db->query($sql);
    }
    $sql = 'DROP DATABASE ' . $bdd['oldname'];
    $db->query($sql);
  }
}
