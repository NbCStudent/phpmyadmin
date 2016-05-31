<?php

if (isset($action) && $action == 'showDB' && isset($_GET['db']) && !empty($_GET['db'])) {
    $bddname = "information_schema";
    $db = dbConnect($bddname);
    $sql = $db->query('SELECT table_schema FROM TABLES GROUP BY table_schema');
    $result = $sql->fetchAll(PDO::FETCH_COLUMN);
    $Smarty->assign('dbnames',$result);
    $dbname = $_GET['db'];
    var_dump($dbname);
    /*$db = dbConnect($dbname);*/
    $sql = $db->query("SELECT table_name FROM TABLES WHERE TABLE_NAME = $dbname");
    $result2 = $sql->fetchAll(PDO::FETCH_COLUMN);
    var_dump($result2);
    $Smarty->assign('dbcol',$result2);
    $template = "show";
}