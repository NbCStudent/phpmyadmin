<?php
<<<<<<< HEAD
=======

function GetAllDB($co)
{
    $sql = $co->query('SHOW DATABASES');
    $result = $sql->fetchAll(PDO::FETCH_COLUMN);
    return ($result);
}
function GetTableDB($db,$dbname)
{
    $sql = $db->query("SELECT TABLE_NAME,DATA_LENGTH,CREATE_TIME FROM TABLES WHERE TABLE_SCHEMA = '" . $dbname . "'");
    $result = $sql->fetchAll(PDO::FETCH_COLUMN);
    return ($result);
}
function deleteBDD($db,$dbname)
{
  $sql = $db->query("DROP DATABASE $dbname");
  return ($sql);
}
>>>>>>> ca1bae9be425e31b37729a65ab5fcf641eea8beb
