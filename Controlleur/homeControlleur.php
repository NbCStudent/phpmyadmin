<?php
/**
 * Created by PhpStorm.
 * User: theo
 * Date: 30/05/16
 * Time: 15:49
 */

if (isset($action) && $action == 'home') {
    //$bddname = "information_schema";
    //$bdd = dbConnect($dbConfig,$bddname);
    //var_dump($bdd);
    //$reponse = $bdd->query("SELECT `TABLE_SCHEMA` FROM `TABLES` GROUP BY `TABLE_SCHEMA`");
    //$Smarty->assign('dbname',$reponse);
    $template = "home";
}