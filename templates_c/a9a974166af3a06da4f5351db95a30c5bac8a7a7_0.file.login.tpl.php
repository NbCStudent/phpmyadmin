<?php
/* Smarty version 3.1.29, created on 2016-06-08 10:24:12
  from "/var/www/site_perso/my_phpmyadmin/phpmyadmin/Views/views/templates/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5757d62c41b6d8_83838625',
  'file_dependency' => 
  array (
    'a9a974166af3a06da4f5351db95a30c5bac8a7a7' => 
    array (
      0 => '/var/www/site_perso/my_phpmyadmin/phpmyadmin/Views/views/templates/login.tpl',
      1 => 1465374195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5757d62c41b6d8_83838625 ($_smarty_tpl) {
?>


<div class="bodyLogin">
    <div class="modal show modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="text-center titleLogin">my-pma</h1>
                    <div class="modal-body">
                        <form class="form col-md-12 center-block" action="index.php?action=checklogin" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" name="_username" required="required" placeholder="Pseudo">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control input-lg" name="_password" required="required" placeholder="Mot de passe">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-lg btn-block btnLogin">Connexion</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
