<?php

include "./Model/tableModel.php";

if (isset($action) && $action == 'showTable' && !empty($_GET['tableName']) && !empty($_GET['dbname'])) {
        $tableName = $_GET['tableName'];
        $dbName = $_GET['dbname'];
        $db = dbConnect($dbName);
        $allDB = GetAllDB($db);
        $result = showTable($db,$tableName,$dbName);
        $Smarty->assign(array('dbnames'=>$allDB,
                            'tableResult'=>$result,
                                'tableName' => $tableName));
        $template = "showTable";
}
elseif (isset($action) && $action == 'deleteTable' && !empty($_GET['tableName'])) {
        $tableName = $_GET['tableName'];
        $db = dbConnect();
        $allDB = GetAllDB($db);
        $remove = deleteTable($db,$tableName);
        $Smarty->assign(array('dbnames'=>$allDB,
            'tableName'=>$result));
        $template = "showTable";
}

elseif (isset($action) && $action == 'deleteBDD' && !empty($_GET['db_name'])){
        $bddname = $_GET['db_name'];
        $db = dbConnect();
        $remove = deleteBDD($db,$bddname);
        $allDB = GetAllDB($db);
        $Smarty->assign('dbnames',$allDB);
        $template = "home";
}
