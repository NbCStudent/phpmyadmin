<?php

function showTable($db,$dbname)
{
    $sql = $db->query("SELECT * FROM $dbname");
    return ($sql);
}