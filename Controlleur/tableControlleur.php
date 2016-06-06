<?php

include '../Model/tableModel.php';

if (isset($action) && $action == 'showContentTable'){
        $db = dbConnect($bddname);
        $allDB = GetAllDB($db);
        showTable($db, $tableName);
        $Smarty->assign('dbnames',$allDB);
        $template = "showTable";
    }