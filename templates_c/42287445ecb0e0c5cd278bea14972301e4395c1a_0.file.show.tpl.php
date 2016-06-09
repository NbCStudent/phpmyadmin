<?php
/* Smarty version 3.1.29, created on 2016-06-09 11:08:42
  from "/var/www/site_perso/my_phpmyadmin/phpmyadmin/Views/views/templates/show.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5759321a8e20f8_21434803',
  'file_dependency' => 
  array (
    '42287445ecb0e0c5cd278bea14972301e4395c1a' => 
    array (
      0 => '/var/www/site_perso/my_phpmyadmin/phpmyadmin/Views/views/templates/show.tpl',
      1 => 1465463321,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./home.tpl' => 1,
  ),
),false)) {
function content_5759321a8e20f8_21434803 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "tableBody", array (
  0 => 'block_5394256855759321a8be6a8_96906531',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'tableBody'}  file:Views/views/templates/show.tpl */
function block_5394256855759321a8be6a8_96906531($_smarty_tpl, $_blockParentStack) {
?>

    <div class="col-md-12 informationTitle">
        <h4>Database : <b><?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
</b></h4>
    </div>
    <div class="col-md-3 informationButton">
        <button id="aff_stat" class="btn btnConfirm" data-toggle="modal" data-target="#alert_aff_stat_bdd">Display statistics</button>
    </div>
    <div class="col-md-3 informationButton">
        <button id="aff_stat" class="btn btnConfirm" data-toggle="modal" data-target="#alert_rename_bdd">Rename</button>
    </div>
    <div class="col-md-9">
        <button id="btn_drop" class="btn btn-danger btnErase" data-toggle="modal" data-target="#alert_drop_bdd_comfirm">
            &nbsp;Erase</button>
    </div>
    <br>
    <!-- Modal Confirmation Drop BDD -->
    <div id="alert_drop_bdd_comfirm" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content modalColor">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Do you really want to erase <b><?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
</b> ?</h4>
                </div>
                <div class="modal-body">
                    <!--<p>Confirmation suppression:&nbsp;</p>-->
                    <button type="button" class="btn btn-default btnErase" data-dismiss="modal">Cancel</button>
                    <a href="index.php?action=deleteBDD&db_name=<?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
" class="btn btnConfirm">Confirmer</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Rename BDD -->
    <div id="alert_rename_bdd" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content modalColor">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Rename DATABASE: <b><?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
</b> ?</h4>
                </div>
                <div class="modal-body">
                    <form action="index.php?action=renameDB" method="post">
                      <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
" name="olddb">
                      <label for="newdb">New name:</label>
                      <input type="text" name="newdb">
                      <input type="submit" class="btn btnConfirm" value="Confirm">
                  </form>
                    <button type="button" class="btn btn-default btnErase" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Aff stat BDD -->
    <div id="alert_aff_stat_bdd" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content modalColor">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Some informations on : <b><?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
</b></h4>
                </div>
                <div class="modal-body">
                    <table>
                        <thead>
                            <tr>
                                <th class="th1">Number of tables</th>
                                <th class="th1">Memory spacce</th>
                                <th class="th1">Creation date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="td1"><?php echo $_smarty_tpl->tpl_vars['dbstat']->value[0]['nb_table'];?>
</td>
                                <td class="td1"><?php echo $_smarty_tpl->tpl_vars['dbstat']->value[0]['sum_length'];?>
</td>
                                <td class="td1"><?php echo $_smarty_tpl->tpl_vars['dbstat']->value[0]['create_time'];?>
</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btnConfirm" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['dbcol']->value) {?>
    <table>
        <thead>
            <tr>
                <th class="th1">Table</th>
                <th class="th1" colspan="2">Action</th>
                <th class="th1">Lines</th>
                <th class="th1">Type</th>
                <th class="th1">Collation</th>
                <th class="th1">Size</th>
            </tr>
        </thead>
        <tbody>
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
                    <tr>
                        <td class="td1"><?php echo $_smarty_tpl->tpl_vars['col']->value['TABLE_NAME'];?>
</td>
                        <td class="td1"><a href="index.php?action=showTable&dbname=<?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
&tableName=<?php echo $_smarty_tpl->tpl_vars['col']->value['TABLE_NAME'];?>
"
                                           class="btn btn-default btnDisplayTable">Display</a></td>
                        <td class="td1"><a href="index.php?action=deleteTable&tableName=<?php echo $_smarty_tpl->tpl_vars['col']->value['TABLE_NAME'];?>
&dbname=<?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
" class="btn btn-default btnEraseTable">Erase</a></td>
                        <td class="td1"><?php echo $_smarty_tpl->tpl_vars['col']->value['TABLE_ROWS'];?>
</td>
                        <td class="td1"><?php echo $_smarty_tpl->tpl_vars['col']->value['TABLE_TYPE'];?>
</td>
                        <td class="td1"><?php echo $_smarty_tpl->tpl_vars['col']->value['TABLE_COLLATION'];?>
</td>
                        <td class="td1"><?php echo $_smarty_tpl->tpl_vars['col']->value['DATA_LENGTH'];?>
</td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['col'] = $__foreach_col_0_saved_local_item;
}
if ($__foreach_col_0_saved_item) {
$_smarty_tpl->tpl_vars['col'] = $__foreach_col_0_saved_item;
}
?>
        </tbody>
        <tfoot>
            <tr>
                <td class="th1"><b>Table</b></td>
                <td class="th1" colspan="2"><b>Action</b></td>
                <td class="th1"><b>Lines</b></td>
                <td class="th1"><b>Type</b></td>
                <td class="th1"><b>Collation</b></td>
                <td class="th1"><b>Size</b></td>
            </tr>
        </tfoot>
    </table>
<?php }?>
        <br>
        <form action="index.php?action=addTable" method="post">
            <div class="col-md-12 informationAddTable">
                <label for="tableName">Add one table :</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="tableName" class="form-control" placeholder="Name it">
                    <input type="hidden" name="DBname" value="<?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
">
                </div>
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btnConfirm">Confirm</button>
            </div>
        </form>
<?php
}
/* {/block 'tableBody'} */
}
