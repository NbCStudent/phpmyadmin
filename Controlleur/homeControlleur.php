<?php

if (isset($action) && $action == 'home') {
    $db = dbConnect();
    $result = GetAllDB($db);
    $Smarty->assign(array('dbnames' => $result,
                    'userName' => $_SESSION['User']));
    $template = "home";
}
