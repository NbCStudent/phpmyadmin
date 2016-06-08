<?php
/* Smarty version 3.1.29, created on 2016-06-07 22:29:34
  from "/var/www/site_perso/my_phpmyadmin/phpmyadmin/Views/views/templates/addTable.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57572eae2806e3_21116025',
  'file_dependency' => 
  array (
    '7b749149b300ec1b494092a462666adc0f4d7848' => 
    array (
      0 => '/var/www/site_perso/my_phpmyadmin/phpmyadmin/Views/views/templates/addTable.tpl',
      1 => 1465306137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./home.tpl' => 1,
  ),
),false)) {
function content_57572eae2806e3_21116025 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "tableBody", array (
  0 => 'block_141801642657572eae279a25_06060649',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'tableBody'}  file:Views/views/templates/addTable.tpl */
function block_141801642657572eae279a25_06060649($_smarty_tpl, $_blockParentStack) {
?>

    <div class="col-md-6 titleAddTable">
        <h3>Database : <?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
</h3>
    </div>
    <div class="col-md-6">
        <h3>Table : <?php echo $_smarty_tpl->tpl_vars['tableName']->value;?>
</h3>
    </div>
    <div class="col-md-12">
        <form action="index.php?action=addTable" method="post">
            <div class="col-md-4">
                <label for="newColumn">Column :</label>
            </div>
            <div class="col-md-4">
                <label for="sel1">Type :</label>
            </div>
            <div class="col-md-4">
                <label>Create :</label>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" name="newColumn" class="form-control" placeholder="Name it">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <select class="form-control" id="sel1">
                        <option>Int</option>
                        <option>Varchar</option>
                        <option>Date</option>
                        <option>Text</option>
                    </select>
                </div>
            </div>
            <input type="hidden" name="tableName" value="<?php echo $_smarty_tpl->tpl_vars['tableName']->value;?>
">
            <input type="hidden" name ="bddName" value="<?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
">
            <div class="col-md-4">
                <button type="submit" class="btn btnConfirm">Confirm</button>
            </div>
        </form>
    </div>
<?php
}
/* {/block 'tableBody'} */
}
