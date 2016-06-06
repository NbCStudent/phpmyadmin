<?php

session_start();
//session_destroy();
require_once ('Model/dbTools.php');
require_once ('Includes/config.php');
require_once ('Libs/smarty-3.1.29/libs/Smarty.class.php');

// On instancie Smarty
$Smarty = new Smarty();
/*
**	Définition des différentes actions possibles
**	sur une page
*/
if (!empty($_GET['action']) && array_key_exists($_GET['action'], $legalActions)) {
    $action = $_GET['action'];
}
else{
    // L'action par default est à null
    $action = 'home';
}
if (file_exists('Controlleur/'.$legalActions[$action].'Controlleur.php')) {
    include 'Controlleur/'.$legalActions[$action].'Controlleur.php';
}else{
    die('404');
}
$Smarty->display("Views/views/header.tpl");
$Smarty->display('Views/views/templates/'.$template.'.tpl');
$Smarty->display('Views/views/footer.tpl');