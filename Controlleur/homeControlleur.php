<?php

if (isset($action) && $action == 'home') {
    $bddname = "information_schema";
    $db = dbConnect($bddname);
    $result = GetAllDB($db);
    $Smarty->assign('dbnames',$result);
    $template = "home";
}

