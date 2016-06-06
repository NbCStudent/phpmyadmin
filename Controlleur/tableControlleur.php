<?php

include "./Model/tableModel.php";

if (isset($action) && $action == 'showTable' && !empty($_GET['tableName']) && !empty($_GET['dbname'])) {
        $tableName = $_GET['tableName'];
        $dbName = $_GET['dbname'];
        $db = dbConnect($dbName);
        $allDB = GetAllDB($db);
        $result = showTable($db,$tableName,$dbName);
        $Smarty->assign(array('dbnames'=>$allDB,
                            'tableName'=>$result));
        $template = "showTable";
}