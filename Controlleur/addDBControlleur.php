<?php

if (isset($action) && $action == 'addDB' && isset($_GET['cr']) && !empty($_GET['cr'])) {
    $bddname = "information_schema";
    $db = dbConnect($bddname);
    $result = GetAllDB($db);
    $Smarty->assign('dbnames',$result);
    $dbname = $_GET['cr'];
    $result2 = AddNewDB($cr, $dbname);
    $Smarty->assign('dbadd',$result2);
    $template = "add";
}