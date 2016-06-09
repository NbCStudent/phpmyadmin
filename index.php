<?php

session_start();

// Session_destroy();

require_once ('Model/dbTools.php');
require_once ('Includes/config.php');
require_once ('Libs/smarty-3.1.29/libs/Smarty.class.php');

// Check if user is connected or not

if (empty($_SESSION['User'])) {
	$is_connected = false;
}
else{
	$is_connected = true;
}

// Smarty is instantiated
$Smarty = new Smarty();

// Definition of every possible action in one page

if (!empty($_GET['action']) && array_key_exists($_GET['action'], $legalActions) && $is_connected == true) {
    $action = $_GET['action'];
}
else{
  if (!empty($_GET['action']) && $_GET['action'] == "checklogin") {
    $action = "checklogin";
  }
  elseif (empty($_GET['action']) && $is_connected == true) {
    $action = 'home';
  }
  elseif (empty($_GET['action']) && $is_connected == false){

      // The action by default is login

      $action = 'login';
  }
  else {
    $template = "404";
  }
}

if (file_exists('Controlleur/'.$legalActions[$action].'Controlleur.php')) {
    include 'Controlleur/'.$legalActions[$action].'Controlleur.php';
}else{
    $template = "404";
}

// Display Smarty Templates

$Smarty->display("Views/views/header.tpl");
$Smarty->display('Views/views/templates/'.$template.'.tpl');
$Smarty->display('Views/views/footer.tpl');
