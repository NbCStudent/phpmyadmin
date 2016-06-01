<?php
/* Smarty version 3.1.29, created on 2016-06-01 13:19:08
  from "/Applications/MAMP/htdocs/TWEB-phpmyadmin/phpmyadmin/Views/views/templates/home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_574ec4acd77d52_13598470',
  'file_dependency' => 
  array (
    'd4ef5b8459706ef752e8b9e716a2e89ed3814e2c' => 
    array (
      0 => '/Applications/MAMP/htdocs/TWEB-phpmyadmin/phpmyadmin/Views/views/templates/home.tpl',
      1 => 1464774905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574ec4acd77d52_13598470 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
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
                                <a href="/"><i class="fa fa-home" aria-hidden="true"></i></a>
                                <a href="/phpMyAdmin/doc/html/index.html"><i class="fa fa-question" aria-hidden="true"></a></i>
                                <a href="http://dev.mysql.com/doc/refman/5.5/en/"><i class="fa fa-book" aria-hidden="true"></a></i>
                                <a href="#"><i class="fa fa-repeat" aria-hidden="true"></a></i>
                            </p>
                            <p class="bodyJumbotron">
                                <a href="index.php?action=addDB&cr=<?php echo $_smarty_tpl->tpl_vars['dbadd']->value;?>
">Nouvelle base de données</a><br>
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
                                    <a href="index.php?action=showDB&db=<?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
</a><br>
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
                                                <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "tableBody", array (
  0 => 'block_511093083574ec4acd74b76_30447707',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="tableView2">
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
/* {block 'tableBody'}  file:Views/views/templates/home.tpl */
function block_511093083574ec4acd74b76_30447707($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'tableBody'} */
}
