<?php

function showTable($db,$tableName,$dbName)
{
    $sql = $db->query("SELECT * FROM $tableName");
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    return ($result);
}
function deleteTable($db,$tableName)
{
    $sql = $db->query("DROP TABLE $tableName");
    return ($sql);
}
function addTable($db,$tableName)
{
    $sql = $db->query("CREATE TABLE $tableName");
    return ($sql);
}