<?php

if (isset($action) && $action == 'showDB' && isset($_GET['db']) && !empty($_GET['db'])) {
    $bddname = "information_schema";
    $db = dbConnect($bddname);
    $result = GetAllDB($db);
    $Smarty->assign('dbnames',$result);
    $dbname = $_GET['db'];
    $result2 = GetTableDB($db,$dbname);
    $Smarty->assign('dbcol',$result2);
    $template = "show";
}