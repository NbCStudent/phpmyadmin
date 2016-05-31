<?php

if (isset($action) && $action == 'showDB' && isset($_GET['db']) && !empty($_GET['db'])) {
    $bddname = "information_schema";
    $db = dbConnect($bddname);
    $sql = $db->query('SELECT table_schema FROM TABLES GROUP BY table_schema');
    $result = $sql->fetchAll(PDO::FETCH_COLUMN);
    $Smarty->assign('dbnames',$result);
    $dbname = $_GET['db'];
    /*$db = dbConnect($dbname);*/
    $sql = $db->query("SELECT TABLE_NAME FROM TABLES WHERE TABLE_SCHEMA = '".$dbname."'");
    $result2 = $sql->fetchAll(PDO::FETCH_COLUMN);
    $Smarty->assign('dbcol',$result2);
    $template = "show";
}