<?php

  include "./Model/userModel.php";

if(isset($action) && $action == "login")
{
  $template = 'login';
}
elseif (isset($action) && $action == "checklogin") {
  $Login = checklogin();
  $bddname = "information_schema";
  $db = dbConnect($bddname);
  $result = GetAllDB($db);
  $Smarty->assign('dbnames',$result);
  $template = "home";
}
