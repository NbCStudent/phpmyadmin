<?php

function GetAllDB($co)
{
    $sql = $co->query('SHOW DATABASES');
    $result = $sql->fetchAll(PDO::FETCH_COLUMN);
    return ($result);
}
function GetTableDB($db,$dbname)
{
    $sql = $db->query("SELECT TABLE_NAME FROM TABLES WHERE TABLE_SCHEMA = '" . $dbname . "'");
    $result = $sql->fetchAll(PDO::FETCH_COLUMN);
    return ($result);
}
function deleteBDD($db,$dbname)
{
  $sql = $db->query("DROP DATABASE $dbname");
  return ($sql);
}
