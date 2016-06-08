<?php
/* Smarty version 3.1.29, created on 2016-06-08 11:12:33
  from "/Applications/MAMP/htdocs/TWEB-phpmyadmin/phpmyadmin/Views/views/templates/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5757e1813221a2_65524778',
  'file_dependency' => 
  array (
    'c19d158a60690b33fbf923ef755fdd7485357c7e' => 
    array (
      0 => '/Applications/MAMP/htdocs/TWEB-phpmyadmin/phpmyadmin/Views/views/templates/login.tpl',
      1 => 1465377152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5757e1813221a2_65524778 ($_smarty_tpl) {
?>

<div class="imgLogin">
    <img src="Asset/img/loginO.jpg" class="imgLogin">
        <div class="modal show modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="text-center">my-pma</h1>
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
