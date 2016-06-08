<?php
/* Smarty version 3.1.29, created on 2016-06-07 14:51:41
  from "/Applications/MAMP/htdocs/TWEB-phpmyadmin/phpmyadmin/Views/views/templates/addTable.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5756c35d685503_61274098',
  'file_dependency' => 
  array (
    '89455eebdbc10a18bb52170dfb59e0e5a9bd5bb0' => 
    array (
      0 => '/Applications/MAMP/htdocs/TWEB-phpmyadmin/phpmyadmin/Views/views/templates/addTable.tpl',
      1 => 1465303898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./home.tpl' => 1,
  ),
),false)) {
function content_5756c35d685503_61274098 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "tableBody", array (
  0 => 'block_2880464215756c35d6737e5_31620238',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'tableBody'}  file:Views/views/templates/addTable.tpl */
function block_2880464215756c35d6737e5_31620238($_smarty_tpl, $_blockParentStack) {
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
