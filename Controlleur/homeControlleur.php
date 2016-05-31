<?php
/**
 * Created by PhpStorm.
 * User: theo
 * Date: 30/05/16
 * Time: 15:49
 */

if (isset($action) && $action == 'home') {
    $bddname = "information_schema";
    $db = dbConnect($bddname);
    $sql = $db->query('SELECT table_schema FROM TABLES GROUP BY table_schema');
    $result = $sql->fetchAll(PDO::FETCH_COLUMN);
    $Smarty->assign('dbnames',$result);
    $template = "home";
}