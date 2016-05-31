<?php
/**
 * Created by PhpStorm.
 * User: theo
 * Date: 30/05/16
 * Time: 16:59
 */


function dbConnect($dbConfig,$bddname)
{
    var_dump($dbConfig);
    $bdd = new PDO("mysql:host=".$dbConfig["host"].";dbname=".$bddname.",".$dbConfig["user"].",".$dbConfig["password"]);
    return $bdd;
}