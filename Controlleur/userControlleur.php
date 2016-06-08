<?php

  include "./Model/userModel.php";

if(isset($action) && $action == "login")
{
  if ($is_connected == true) {
    $result = GetAllDB($db);
    $Smarty->assign(array('dbnames' => $result,
                    'userName' => $_SESSION['User']));
    $template = "home";
  }
  else {
    $template = 'login';
  }
}
elseif (isset($action) && $action == "checklogin" && !empty($_POST)) {
<<<<<<< HEAD
=======

>>>>>>> d689aff1f3b2aa74e8a1d6b7225ee216db5c8dd8
  $db = dbConnect("mysql");
  $Login = checklogin($db,$_POST['_username'],$_POST['_password']);
  if($Login == true)
  {
    $result = GetAllDB($db);
    $Smarty->assign(array('dbnames' => $result,
                    'userName' => $_SESSION['User']));
    $template = "home";
  }
  else {
    $template = "login";
  }
}
elseif (isset($action) && $action == "logout") {
  logout();
  $template = "login";
<<<<<<< HEAD
=======
}
else {
  $template = "404";
>>>>>>> d689aff1f3b2aa74e8a1d6b7225ee216db5c8dd8
}
