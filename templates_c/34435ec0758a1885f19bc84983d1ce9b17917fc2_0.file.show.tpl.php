<?php
/* Smarty version 3.1.29, created on 2016-05-31 19:53:27
  from "/Applications/MAMP/htdocs/TWEB-phpmyadmin/phpmyadmin/Views/views/templates/show.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_574dcf97e277f9_55687201',
  'file_dependency' => 
  array (
    '34435ec0758a1885f19bc84983d1ce9b17917fc2' => 
    array (
      0 => '/Applications/MAMP/htdocs/TWEB-phpmyadmin/phpmyadmin/Views/views/templates/show.tpl',
      1 => 1464717195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./home.tpl' => 1,
  ),
),false)) {
function content_574dcf97e277f9_55687201 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "tableBody", array (
  0 => 'block_896155799574dcf97dd1b51_67387235',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'tableBody'}  file:Views/views/templates/show.tpl */
function block_896155799574dcf97dd1b51_67387235($_smarty_tpl, $_blockParentStack) {
?>

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
                <td class="th1"><b>Tables</b></td>
                <td class="th1"><b>Tables</b></td>
            </tr>
        </tfoot>
    </table>
<?php
}
/* {/block 'tableBody'} */
}
