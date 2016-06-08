<?php

if (isset($action) && $action == 'showDB' && isset($_GET['db']) && !empty($_GET['db'])) {
    $db = dbConnect("information_schema");
    $result = GetAllDB($db);
    $dbname = $_GET['db'];
    $result2 = GetTableDB($db,$dbname);
    $statsdb = GetStatsDB($db,$dbname);
    $Smarty->assign(array('dbcol'=>$result2,
                    'dbname'=>$_GET['db'],
                    'dbnames' => $result,
                    'dbstat' => $statsdb));
    $template = "show";
}
elseif (isset($action) && $action == 'addDB') {
    $db = dbConnect();
    $result = GetAllDB($db);
    $Smarty->assign('dbnames',$result);
    $template = "add";
}
elseif (isset($action) && $action == 'checkAddDB' && isset($_POST['newDB']) && !empty($_POST['newDB'])){
    $newname = $_POST['newDB'];
    $db = dbConnect("information_schema");
    $query = $db->query("CREATE DATABASE $newname");
    $result = GetAllDB($db);
    $result2 = GetTableDB($db,$newname);
    $Smarty->assign(array('dbcol'=>$result2,
                        'dbname'=>$newname,
                        'dbnames' => $result));
    $template = "show";
}
elseif (isset($action) && $action == 'addTable'){
    $tableName = htmlspecialchars($_POST['tablename']);
    $db = dbConnect();
    $result = GetAllDB($db);
    //$add = addTable($tableName);
    $Smarty->assign(array('dbnames'=>$result,
                        'dbname' => $_POST['DBname'],
                        'tableName' => $tableName));
    $template ="addTable";
}
elseif (isset($action) && $action == 'deleteBDD' && !empty($_GET['db_name'])){
    $bddname = $_GET['db_name'];
    $db = dbConnect();
    $remove = deleteBDD($db,$bddname);
    $allDB = GetAllDB($db);
    $Smarty->assign('dbnames',$allDB);
    $template = "home";
}
else {
  $template = "404";
}
