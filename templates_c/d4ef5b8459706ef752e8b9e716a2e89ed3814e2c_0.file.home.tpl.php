<?php
/* Smarty version 3.1.29, created on 2016-05-31 13:24:00
  from "/Applications/MAMP/htdocs/TWEB-phpmyadmin/phpmyadmin/Views/views/templates/home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_574d74507e9654_20697829',
  'file_dependency' => 
  array (
    'd4ef5b8459706ef752e8b9e716a2e89ed3814e2c' => 
    array (
      0 => '/Applications/MAMP/htdocs/TWEB-phpmyadmin/phpmyadmin/Views/views/templates/home.tpl',
      1 => 1464693839,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574d74507e9654_20697829 ($_smarty_tpl) {
?>
<div class="container interface">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="page-header">
                        <img class="logoPhpmyadmin" src="Asset/img/logoPhpmyadmin.png" alt="logoPhpmyadmin">
                    </div>
                    <div class="col-md-3">
                        <div class="jumbotron">
                            <h3 class="titleJumbotron">Accueil</h3>
                            <p class="titleJumbotron">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <i class="fa fa-question" aria-hidden="true"></i>
                                <i class="fa fa-book" aria-hidden="true"></i>
                                <i class="fa fa-repeat" aria-hidden="true"></i>
                            </p>
                            <p class="bodyJumbotron">
                                Nouvelle base de données<br>
                                <?php
$_from = $_smarty_tpl->tpl_vars['dbnames']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_dbname_0_saved_item = isset($_smarty_tpl->tpl_vars['dbname']) ? $_smarty_tpl->tpl_vars['dbname'] : false;
$_smarty_tpl->tpl_vars['dbname'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['dbname']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['dbname']->value) {
$_smarty_tpl->tpl_vars['dbname']->_loop = true;
$__foreach_dbname_0_saved_local_item = $_smarty_tpl->tpl_vars['dbname'];
?>
                                    <?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
<br>
                                <?php
$_smarty_tpl->tpl_vars['dbname'] = $__foreach_dbname_0_saved_local_item;
}
if ($__foreach_dbname_0_saved_item) {
$_smarty_tpl->tpl_vars['dbname'] = $__foreach_dbname_0_saved_item;
}
?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="tableView">
                                                <table class="table1">
                                                    <thead class="thead1">
                                                        <tr class="tr1">
                                                            <th class="th1"></th>
                                                            <th class="th1">#</th>
                                                            <th class="th1">Nom</th>
                                                            <th class="th1">Type</th>
                                                            <th class="th1">Interclassement</th>
                                                            <th class="th1">Attributs</th>
                                                            <th class="th1">Null</th>
                                                            <th class="th1">Défaut</th>
                                                            <th class="th1">Extra</th>
                                                            <th class="th1">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="tbody1">
                                                        <tr class="tr1">
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                        </tr>
                                                        <tr class="tr1">
                                                            <td class="td1">February</td>
                                                            <td class="td1">$80</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                        </tr>
                                                        <tr class="tr1">
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                        </tr>
                                                        <tr class="tr1">
                                                            <td class="td1">February</td>
                                                            <td class="td1">$80</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                        </tr>
                                                        <tr class="tr1">
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                        </tr>
                                                        <tr class="tr1">
                                                            <td class="td1">February</td>
                                                            <td class="td1">$80</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr class="tr1">
                                                            <td class="td1">Sum</td>
                                                            <td class="td1">$180</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="tableView2">
                                                <table class="table2">
                                                    <thead class="thead2">
                                                    <tr class="tr2">
                                                        <th class="th2"></th>
                                                        <th class="th2">#</th>
                                                        <th class="th2">Nom</th>
                                                        <th class="th2">Type</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="tbody2">
                                                    <tr class="tr2">
                                                        <td class="td2">January</td>
                                                        <td class="td2">$100</td>
                                                        <td class="td2">January</td>
                                                        <td class="td2">$100</td>
                                                    </tr>
                                                    <tr class="tr2">
                                                        <td class="td2">February</td>
                                                        <td class="td2">$80</td>
                                                        <td class="td2">January</td>
                                                        <td class="td2">$100</td>
                                                    </tr>
                                                    <tr class="tr2">
                                                        <td class="td2">January</td>
                                                        <td class="td2">$100</td>
                                                        <td class="td2">January</td>
                                                        <td class="td2">$100</td>
                                                    </tr>
                                                    <tr class="tr2">
                                                        <td class="td2">February</td>
                                                        <td class="td2">$80</td>
                                                        <td class="td2">January</td>
                                                        <td class="td2">$100</td>
                                                    </tr>
                                                    <tr class="tr2">
                                                        <td class="td2">January</td>
                                                        <td class="td2">$100</td>
                                                        <td class="td2">January</td>
                                                        <td class="td2">$100</td>
                                                    </tr>
                                                    <tr class="tr2">
                                                        <td class="td2">January</td>
                                                        <td class="td2">$100</td>
                                                        <td class="td2">January</td>
                                                        <td class="td2">$100</td>
                                                    </tr>
                                                    <tr class="tr2">
                                                        <td class="td2">January</td>
                                                        <td class="td2">$100</td>
                                                        <td class="td2">January</td>
                                                        <td class="td2">$100</td>
                                                    </tr>
                                                    </tbody>
                                                    <tfoot class="tfoot2">
                                                    <tr class="tr2">
                                                        <td class="td2">Sum</td>
                                                        <td class="td2">$180</td>
                                                        <td class="td2">January</td>
                                                        <td class="td2">$100</td>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
