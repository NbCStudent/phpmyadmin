<?php
/* Smarty version 3.1.29, created on 2016-06-02 11:04:06
  from "/var/www/site_perso/my_phpmyadmin/phpmyadmin/Views/views/templates/add.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_574ff686471394_70576976',
  'file_dependency' => 
  array (
    'a87596bf715c689144d71fc583b37565cf2e6b4c' => 
    array (
      0 => '/var/www/site_perso/my_phpmyadmin/phpmyadmin/Views/views/templates/add.tpl',
      1 => 1464858244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./home.tpl' => 1,
  ),
),false)) {
function content_574ff686471394_70576976 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "tableBody", array (
  0 => 'block_873567584574ff68646ee91_01549738',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'tableBody'}  file:Views/views/templates/add.tpl */
function block_873567584574ff68646ee91_01549738($_smarty_tpl, $_blockParentStack) {
?>

    <form action="index.php?action=checkAddDB" method="post">
        <label for="newDB">Nouvelle Base de donnée :</label>
        <input type="text" name="newDB">
        <br>
        <input type="submit" value="valider">
    </form>
<?php
}
/* {/block 'tableBody'} */
}
