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
}
else {
  $template = "404";
}
