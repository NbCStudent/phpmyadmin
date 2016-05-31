<?php

if (isset($action) && $action == 'home') {
    $bddname = "information_schema";
    $db = dbConnect($bddname);
    $sql = $db->query('SELECT * FROM  GROUP BY ');
    $result = $sql->fetchAll(PDO::FETCH_COLUMN);
    $Smarty->assign('dbnames',$result);
    $template = "home";
}
