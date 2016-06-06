<?php
/* Smarty version 3.1.29, created on 2016-06-02 13:46:51
  from "/var/www/site_perso/my_phpmyadmin/phpmyadmin/Views/views/templates/addTable.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57501cab5eceb6_31801269',
  'file_dependency' => 
  array (
    '7b749149b300ec1b494092a462666adc0f4d7848' => 
    array (
      0 => '/var/www/site_perso/my_phpmyadmin/phpmyadmin/Views/views/templates/addTable.tpl',
      1 => 1464867998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./home.tpl' => 1,
  ),
),false)) {
function content_57501cab5eceb6_31801269 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "tableBody", array (
  0 => 'block_33342853857501cab5e7f29_06221686',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'tableBody'}  file:Views/views/templates/addTable.tpl */
function block_33342853857501cab5e7f29_06221686($_smarty_tpl, $_blockParentStack) {
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
