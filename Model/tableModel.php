<?php

function showTable($db,$tableName,$dbName)
{
    $sql = $db->query("SELECT * FROM $tableName");
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    return ($result);
}
function deleteTable($db,$tableName)
{
    $sql = $db->query("DROP DATABASE $tableName");
    return ($sql);
}