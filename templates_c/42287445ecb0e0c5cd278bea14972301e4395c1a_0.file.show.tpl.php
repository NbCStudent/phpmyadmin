<?php
/* Smarty version 3.1.29, created on 2016-06-06 10:23:27
  from "/var/www/site_perso/my_phpmyadmin/phpmyadmin/Views/views/templates/show.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575532ff05a674_38683520',
  'file_dependency' => 
  array (
    '42287445ecb0e0c5cd278bea14972301e4395c1a' => 
    array (
      0 => '/var/www/site_perso/my_phpmyadmin/phpmyadmin/Views/views/templates/show.tpl',
      1 => 1465201405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./home.tpl' => 1,
  ),
),false)) {
function content_575532ff05a674_38683520 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "tableBody", array (
  0 => 'block_539405169575532fef1fc97_72543445',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'tableBody'}  file:Views/views/templates/show.tpl */
function block_539405169575532fef1fc97_72543445($_smarty_tpl, $_blockParentStack) {
?>

    <h4>Base de donnée : <?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
</h4>
    <button id="btn_drop" class="btn btn-danger" data-toggle="modal" data-target="#alert_drop_bdd_comfirm"><i class="glyphicon glyphicon-remove"></i>&nbsp;Suprimer</button>
    <br>
    <!-- Modal -->
    <div id="alert_drop_bdd_comfirm" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Confirmation Suppression Base de donnée : <?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
</h4>
                </div>
                <div class="modal-body">
                    <p>Confirmation suppression:&nbsp;</p>
                    <a href="index.php?action=deleteBDD&db_name=<?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
" class="btn btn-success">Valider</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <table>
        <thead>
            <tr>
                <th class="th1">Table</th>
                <th class="th1" colspan="2">Action</th>
                <th class="th1">Lines</th>
                <th class="th1">Type</th>
                <th class="th1">Collation</th>
                <th class="th1">Size</th>
                <th class="th1">Loss</th>
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
                        <td class="td1"><?php echo $_smarty_tpl->tpl_vars['col']->value;?>
</td>
                        <td class="td1"><span class="btn btn-default btnTable">Display</span></td>
                        <td class="td1"><span class="btn btn-default btnTable">Erase</span></td>
                        <td class="td1"></td>
                        <td class="td1"></td>
                        <td class="td1"></td>
                        <td class="td1"></td>
                        <td class="td1"></td>
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
                <td class="th1"><b>Tables</b></td>
                <td class="th1" colspan="2"><b>Sum</b></td>
                <td class="th1"><b></b></td>
                <td class="th1"><b>InnoDB</b></td>
                <td class="th1"><b>ut8-unicode_ci</b></td>
                <td class="th1"><b></b></td>
                <td class="th1"><b>Tables</b></td>
            </tr>
        </tfoot>
    </table>
            Ajouter une table :
            <form action="index.php?action=addTable" method="post">
                <label for="tablename">Nom : </label>
                <input type="text" name="tablename">
                <input type="hidden" name="DBname" value="<?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
">
                <input type="submit" value="valider">
            </form>
<?php
}
/* {/block 'tableBody'} */
}
