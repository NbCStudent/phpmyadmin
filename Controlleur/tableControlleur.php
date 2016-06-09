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
        $dbname = $_GET['dbname'];
        $db = dbConnect($dbname);
        $allDB = GetAllDB($db);
        $remove = deleteTable($db,$tableName);
        $Smarty->assign(array('dbnames'=>$allDB,
            'dbname'=>$dbname));
        $template = "show";
}
elseif (isset($action) && $action == 'addTable' && !empty($_POST['tableName'])){
    $tableName = htmlspecialchars($_POST['tableName']);
    $db = dbConnect();
    $result = GetAllDB($db);
    $Smarty->assign(array('dbnames'=>$result,
                        'dbname' => $_POST['DBname'],
                        'tableName' => $tableName));
    $template ="addTable";
}
elseif (isset($action) && $action = "checkaddTable" && !empty($_POST['newColumn'])) {
  $dbname = $_POST['bddName'];
  $tablename = $_POST['tableName'];
  $column = $_POST['newColumn'];
  $type = $_POST['type'];
  $db = dbConnect($dbname);
  $alldb = GetAllDB($db);
  $result = addTable($db,$tablename,$column,$type);
  $Smarty->assign(array('dbnames'=>$alldb,
                        'tableName'=>$tablename));
  $template = "showTable";

}
else {
  $template = "404";
}
