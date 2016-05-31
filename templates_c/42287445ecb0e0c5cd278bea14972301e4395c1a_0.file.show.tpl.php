<?php
/* Smarty version 3.1.29, created on 2016-05-31 16:54:35
  from "/var/www/site_perso/my_phpmyadmin/phpmyadmin/Views/views/templates/show.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_574da5ab216437_20749451',
  'file_dependency' => 
  array (
    '42287445ecb0e0c5cd278bea14972301e4395c1a' => 
    array (
      0 => '/var/www/site_perso/my_phpmyadmin/phpmyadmin/Views/views/templates/show.tpl',
      1 => 1464706049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./home.tpl' => 1,
  ),
),false)) {
function content_574da5ab216437_20749451 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "tableBody", array (
  0 => 'block_1108724458574da5ab210b74_51580196',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'tableBody'}  file:Views/views/templates/show.tpl */
function block_1108724458574da5ab210b74_51580196($_smarty_tpl, $_blockParentStack) {
?>

    <?php
$_from = $_smarty_tpl->tpl_vars['dbcol']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_col_0_saved_item = isset($_smarty_tpl->tpl_vars['col']) ? $_smarty_tpl->tpl_vars['col'] : false;
$_smarty_tpl->tpl_vars['col'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['col']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
$__foreach_col_0_saved_local_item = $_smarty_tpl->tpl_vars['col'];
?>
        <?php echo $_smarty_tpl->tpl_vars['col']->value;?>

    <?php
$_smarty_tpl->tpl_vars['col'] = $__foreach_col_0_saved_local_item;
}
if ($__foreach_col_0_saved_item) {
$_smarty_tpl->tpl_vars['col'] = $__foreach_col_0_saved_item;
}
}
/* {/block 'tableBody'} */
}
