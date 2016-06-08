<?php

if (isset($action) && $action == 'home') {
    $db = dbConnect();
    $result = GetAllDB($db);
    $Smarty->assign(array('dbnames' => $result,
                    'userName' => $_SESSION['User']));
    $template = "home";
}
<<<<<<< HEAD
=======
else {
  $template = "404";
}
>>>>>>> d689aff1f3b2aa74e8a1d6b7225ee216db5c8dd8
