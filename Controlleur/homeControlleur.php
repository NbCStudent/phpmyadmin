<?php

// Action to check the user's login to access the platform

if (isset($action) && $action == 'home') {
    $db = dbConnect();
    $result = GetAllDB($db);
    $Smarty->assign(array('dbnames' => $result,
                    'userName' => $_SESSION['User']));
    $template = "home";
}
else {
  $template = "404";
}
