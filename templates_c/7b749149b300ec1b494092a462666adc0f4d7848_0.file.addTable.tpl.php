<?php
/* Smarty version 3.1.29, created on 2016-06-06 10:31:00
  from "/var/www/site_perso/my_phpmyadmin/phpmyadmin/Views/views/templates/addTable.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575534c4acf3b0_06299212',
  'file_dependency' => 
  array (
    '7b749149b300ec1b494092a462666adc0f4d7848' => 
    array (
      0 => '/var/www/site_perso/my_phpmyadmin/phpmyadmin/Views/views/templates/addTable.tpl',
      1 => 1465201859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./home.tpl' => 1,
  ),
),false)) {
function content_575534c4acf3b0_06299212 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "tableBody", array (
  0 => 'block_1324493720575534c4ac53b5_62181148',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'tableBody'}  file:Views/views/templates/addTable.tpl */
function block_1324493720575534c4ac53b5_62181148($_smarty_tpl, $_blockParentStack) {
?>

    <h3>Base de donnée : <?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
</h3><br>
    <h4>Table : <?php echo $_smarty_tpl->tpl_vars['tableName']->value;?>
</h4>
    <form action="index.php?action=valdationTable" method="post">
        <label for="newDB">Column: </label>
        <input type="text" name="newColum">
        <input type="hidden" name="tableName" value="<?php echo $_smarty_tpl->tpl_vars['tableName']->value;?>
">
        <input type="hidden" name ="bddName" value="<?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
">
        <br>
        <input type="submit" value="valider">
    </form>
<?php
}
/* {/block 'tableBody'} */
}
