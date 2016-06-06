<?php
/* Smarty version 3.1.29, created on 2016-06-06 11:03:45
  from "/Applications/MAMP/htdocs/TWEB-phpmyadmin/phpmyadmin/Views/views/templates/addTable.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57553c713a5449_88210600',
  'file_dependency' => 
  array (
    '89455eebdbc10a18bb52170dfb59e0e5a9bd5bb0' => 
    array (
      0 => '/Applications/MAMP/htdocs/TWEB-phpmyadmin/phpmyadmin/Views/views/templates/addTable.tpl',
      1 => 1465203492,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./home.tpl' => 1,
  ),
),false)) {
function content_57553c713a5449_88210600 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "tableBody", array (
  0 => 'block_43677342357553c7139be76_71979693',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'tableBody'}  file:Views/views/templates/addTable.tpl */
function block_43677342357553c7139be76_71979693($_smarty_tpl, $_blockParentStack) {
?>

    <h3>Base de donnée : <?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
</h3><br>
    <h4>Table : <?php echo $_smarty_tpl->tpl_vars['tableName']->value;?>
</h4>
    <form action="index.php?action=" method="post">
        <label for="newDB">Column: </label>
        <input type="text" name="newDB">
        <br>
        <input type="submit" value="valider">
    </form>
<?php
}
/* {/block 'tableBody'} */
}
