<?php

// Every functions related to tables

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
function addTable($db,$tableName,$col,$type)
{
    $sql = $db->query("CREATE TABLE $tableName ($col $type)");
    var_dump($sql);
    return ($sql);
}
