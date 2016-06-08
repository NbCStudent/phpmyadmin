<?php

  include "./Model/userModel.php";

if(isset($action) && $action == "login")
{
  $template = 'login';
}
elseif (isset($action) && $action == "connection") {
  $check = checklogin();
  header('location :index.php?action=home');
}
