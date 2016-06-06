<?php

function showTable($db,$Tablename,$dbName)
{
    $sql = $db->query("SELECT * FROM $Tablename");
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    return ($result);
}