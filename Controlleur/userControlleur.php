<?php

// Every action related to the user's login to access the platform

  include "./Model/userModel.php";

if(isset($action) && $action == "login")
{
  if ($is_connected == true) {
    $db = dbConnect();
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
elseif (isset($action) && $action == "userQuery" && !empty($_POST)) {
  /*if () {
    $db = dbConnect();
    $result = GetAllDB($db);
    $query = $_POST['query'];
    userQuery($query);
    $Smarty->assign(array('userQuery' => $result));
    $template = "textArea";
  }*/
}
else {
  $template = "404";
}